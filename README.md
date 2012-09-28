BreweryDB-Webhooks
==================

A sample for how to receive webhook calls from the BreweryDB API.  This code comes with no guarantees and hasn't been
thoroughly tested.

This is a very simple PHP script you could use to just receive a web hook call.

You'd put this somewhere where it can be accessed via the outside world 
(i.e. - http://mywebsite.com/webhookreceiver.php) and register it in your developer dashboard on
http://brewerydb.com (note that web hooks are only available to premium subscribers).

Then the BreweryDB API will send a POST to that URL when something changes in the API and you can process 
the data like below.  What you do with the information depends on your specific needs.