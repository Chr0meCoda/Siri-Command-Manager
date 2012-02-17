#!/usr/bin/python
# -*- coding: utf-8 -*-

import os
from datetime import date
import locale 
from plugin import *

from urllib import urlopen
import urllib
import urllib2
import json

from siriObjects.baseObjects import AceObject, ClientBoundCommand
from siriObjects.uiObjects import AddViews, AssistantUtteranceView
from siriObjects.systemObjects import DomainObject

class webservicePlugin(Plugin):   

    @register("de-DE", ".*Test.*")
    def do_webrequest(self, speech, language):
        
        # Edit this adress.
        pireLocation = 'http://dib.li/siri/response.php'
        
        location = self.getCurrentLocation(force_reload=True)
        postdata = {
        	'text': speech.replace("Test", "", 1),
        	'language': language,
        	'latitude': str( location.latitude ),
        	'longitude': str( location.longitude ),
        	'timezone': self.assistant.timeZoneId,
        	'region': self.assistant.region
        };
        
        req = urllib2.Request( pireLocation + "?" + urllib.urlencode( postdata ),
			headers = {
     		"Content-Type": "application/json",
			"Accept": "*/*",   
        	"User-Agent": "pire-plugin", 
       	})
       	
        webjson = urllib2.urlopen(req).read()
        request = json.loads(webjson)

        view = AddViews(self.refId, dialogPhase="Summary")
        view.views = request
        print view.to_plist()
        self.sendRequestWithoutAnswer(view.to_plist())
        self.complete_request()
