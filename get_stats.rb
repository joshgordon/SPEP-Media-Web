require 'net/smtp' 
require 'mysql'
require 'ipaddr' 
require 'date' 
require 'geoip' 

email = {
    :to => ["josh@gordonclan.net", "craig.poland@me.com", "andrew@csicom.com", "dgordon@spepchurch.org", "josh@joshgordon.net"], 
    :from => "spep.stream@joshgordon.net", 
    :from_alias => "SPEP Stream Info",  
    :subject => "SPEP Stream info for #{Date.today().to_s}"
}

def send_email(to,opts={})
  opts[:server]      ||= 'localhost'
  opts[:from]        ||= 'email@example.com'
  opts[:from_alias]  ||= 'Example Emailer'
  opts[:subject]     ||= "You need to see this"
  opts[:body]        ||= "Important stuff!"

  msg = <<END_OF_MESSAGE
From: #{opts[:from_alias]} <#{opts[:from]}>
To: <#{to}>
Subject: #{opts[:subject]}

#{opts[:body]}
END_OF_MESSAGE

  Net::SMTP.start(opts[:server]) do |smtp|
    smtp.send_message msg, opts[:from], to
  end
end

all_viewers = Hash.new()
comments = Array.new() 
out_of_state = Array.new() 
geo = GeoIP.new('/usr/local/etc/GeoLiteCity.dat')


begin

  con = Mysql.new 'localhost', 'spep_scripts', 'B34PX8MD', 'spep_web'

  rs = con.query("SELECT * FROM netusers")
  n_rows = rs.num_rows
  
  
  n_rows.times do
    row = rs.fetch_row
    addr = IPAddr.new(row[1])
    viewers = row[2].to_i
    comment = row[3]
    date = DateTime.strptime(row[4], '%m/%d/%Y %I:%M:%S %P')
    content = row[5] 

    if Date.today() == date.to_date()
      
      if !all_viewers.has_key?(addr)
        all_viewers[addr] = {:addr => addr, :viewers => viewers, :date => date, :media => content}
      elsif 
        if all_viewers[addr][:viewers] < viewers
          all_viewers[addr][:viewers] = viewers
        end
      end
      if comment.strip != "" 
        comments << {:comment  => comment, :ipaddr => addr.to_string, :date => date} 
      end
    end
  end
  
rescue Mysql::Error => e
  puts e.errno
  puts e.error
    
ensure
  con.close if con
end

email_to_send = "" 

unique_ips = all_viewers.length
total_views = 0 

all_viewers.each { |addr, viewer| 
  total_views += viewer[:viewers]
}

email_to_send += "\n\nTotal Online: #{total_views}\n"
email_to_send += "Unique IPs:   #{unique_ips}\n"
email_to_send += "Views/IP:     #{(total_views/unique_ips.to_f).round(4)}\n\n"

if comments.length > 0 
  email_to_send += "========\nComments\n========\n"
  #handle comments down here. 
  #:comment  => comment, :ipaddr => addr.to_string, :date => date 
  comments.each { |comment| 
    str = "" 
    str += "="*80 + "\n" 
    str += "IP:   #{comment[:ipaddr]} \n" 
    str += "Date: #{comment[:date].to_s} \n" 
    str += "Comment: \n #{comment[:comment]}\n"
    str += "="*80 + "\n\n" 
    email_to_send += str
  }
end


all_viewers.each { |addr, viewer| 
  info = geo.city(addr.to_s).to_hash
  str = addr.to_s 
  str += "\n" 
  str += '=' * addr.to_s.length + "\n" 
  str += "Viewers:    #{viewer[:viewers]}\n"
  str += "Date:       #{viewer[:date].to_time.to_s}\n" 
  str += "Country:    #{info[:country_name]}\n" 
  str += "State/City: #{info[:region_name]}" 
  str += "/#{info[:city_name]}\n" 
  str += "Media:      #{viewer[:media]}\n"
  str += "\n" 
  email_to_send += str 
 
  if (info[:country_name] != "United States" || info[:region_name]  != "MD")
    this_out_of_state = "" 
    if info[:country_name] != "United States"
      this_out_of_state += "#{info[:country_name]}  "
    end
    if info[:region_name] != "" 
      this_out_of_state << "#{info[:region_name]}/#{info[:city_name]}"
    end
    if this_out_of_state != "" 
      out_of_state << this_out_of_state
    end
  end

}

out_of_state.each { |location| 
  email_to_send = location + "\n" + email_to_send 
}
if out_of_state.length > 0 
  email_to_send = "Out of state: \n" + email_to_send
end

email[:to].each { |addr|
  send_email(addr, {:from => email[:from], :from_alias => email[:from_alias], :subject => email[:subject], :body => email_to_send})
 }
print email_to_send 
