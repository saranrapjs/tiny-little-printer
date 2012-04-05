# TINY LITTLE PRINTER

This is a set of scripts for producing and consuming receipt printer-ready data, using a very simple weather forecast as an example.

TODOS: this really should be a makefile or similar, configuring everything on first-run.  Some nasty hard-coded URL's, etc.  Need some kind of tokenized security.

## Setting up the server

-Pick a URL to be printed

I'm using ``index.php`` as a sample URL-to-be-printed; it's a simple weather forecast.

-Configure pbm.php.  Note the "http://url/to/pbm.php"


## Setting up the client:

- Edit "get_weather.sh", changing the remote "pbm.php" file and the local printer IP address.

- Put the "get_weather.sh" somewhere meaningful

- Setup Launchd

``
cd server;
cp com.ilikenicethings.littleprinter.plist /Library/LaunchDaemons/;
launchctl load /Library/LaunchDaemons/com.ilikenicethings.littleprinter.plist;
``

## To make further changes to the client:

``
launchctl unload /Library/LaunchDaemons/com.ilikenicethings.littleprinter.plist
``

then, once you're finished editing:

``
launchctl load /Library/LaunchDaemons/com.ilikenicethings.littleprinter.plist
``