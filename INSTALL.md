Installing the Postini plugin
=============================

# Extract the plugin's distribution file into the SquirrelMail
  "plugins" directory:

        cd /path/to/public/squirrelmail
        cd plugins
        gzip -dc postini-1.0.tar.gz |tar xfv -

# Enable the plugin in SquirrelMail.  Go to your SquirrelMail config
  directory, run the config program, choose option 8, and move "postini"
  from "Available Plugins" to "Installed Plugins".  Don't forget to
  save your changes before exiting!

        cd ../../config
        ./conf.pl

# Test it out.  Log into SquirrelMail and you should see a link at the
  top of the page that says "Postini Message Center".

# If you're using a translation, please doublecheck the spelling and
  grammer of the messages you see and let me know if anything needs to
  be corrected.


Thanks for using the plugin.  I hope you enjoy it!
