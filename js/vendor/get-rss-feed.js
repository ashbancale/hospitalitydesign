// Here we are loading the google Feed libraries
    google.load("feeds", "1");
    // Load RSS feed by name. Each feed has a call to either a standard, generic display function, or its own custom display function
    function loadRSSFeed(feedName){
        if(feedName=="hdtalksblog")displayhdtalksblog('http://hdtalks.hospitalitydesign.com/feed','hdtalksblog_rss');
        if(feedName=="industrynews")displayindustrynews('http://www.hmenews.com/rss.xml','industrynews_rss');

    }

 var is_chrome = window.chrome;

    // generic display function (truncates abstract at 120 characters)
    function displayindustrynews(feedURL,divId) {
        var feed = new google.feeds.Feed(feedURL);
        feed.setResultFormat(google.feeds.Feed.XML_FORMAT);
        feed.setNumEntries(3);
        feed.load(function(result) {
            if (!result.error) {
                var items = result.xmlDocument.getElementsByTagName("item");
                var result="<ul>";
                for(var i = 0; i < items.length; i++){
                    var titleElement = items[i].getElementsByTagName("title")[0];
                    var title = titleElement.firstChild.nodeValue;
                    var linkElement = items[i].getElementsByTagName("link")[0];
                    var dateElement = items[i].getElementsByTagName("pubDate")[0];
                    var date = dateElement.firstChild.nodeValue;
                    var pubDate = date;
                    date = new Date(pubDate);
                    var months = Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                    var datestring =  months[date.getMonth()] + " " + date.getDate() + ", " + " " + date.getFullYear();
                    //var authorElement = items[i].getElementsByTagName("dc:creator")[0];
                    //var author = authorElement.firstChild.nodeValue;
                    var url = linkElement.firstChild.nodeValue;
                    
                    //var descriptionElement = items[i].getElementsByTagName("description")[0];
                    //var description = descriptionElement.firstChild.nodeValue;
                    //description = removeHTMLTags(description);
                    //var totalchar=((description.length>200)?200:description.length);
                    //description=description.substr(0,totalchar)+((totalchar<200)?'':'...');
                    result=result+'<li><a href="'+url+'">'+title+'</a><span class="date">'+datestring+'</span></li>';
                    } 
                result=result+'</ul>';
                var outputDiv = document.getElementById(divId);
                outputDiv.innerHTML = result;
                } 
            });
    }

        
    // generic display function (truncates abstract at 120 characters)
    function displayhdtalksblog(feedURL,divId) {
        var feed = new google.feeds.Feed(feedURL);
        feed.setResultFormat(google.feeds.Feed.XML_FORMAT);
        feed.setNumEntries(4);
        feed.load(function(result) {
            if (!result.error) {
                var items = result.xmlDocument.getElementsByTagName("item");
                result="<ul>";
                var imgsrc="";
                var numberOfItems = 4;
                if (items.length < 4)
                {
                    numberOfItems = items.length;
                }

                for(var i = 0; i < numberOfItems; i++){
                    var titleElement = items[i].getElementsByTagName("title")[0];
                    var title = titleElement.firstChild.nodeValue;
                    var linkElement = items[i].getElementsByTagName("link")[0];
                    var url = linkElement.firstChild.nodeValue;
                    var dateElement = items[i].getElementsByTagName("pubDate")[0];


                    if (i == 0) {
                        var descriptionElement = items[0].getElementsByTagName("description")[0];
                        var description = descriptionElement.firstChild.nodeValue;

                        if ($(description).find("img:first").length) { 
                            
                            imgsrc = $(description).find("img:first").attr("src");
                            var img = document.createElement('img');
                            img.src = imgsrc;
                            document.getElementById('hdtalkImage').appendChild(img); 
                            var ahdlink = $('<a/>').attr('href', url);
                            $(ahdlink ).attr("target","_blank");
                            $('#hdtalkImage img').wrap(ahdlink);

                        } else {

                            if (is_chrome) {
                                  var content =items[0].getElementsByTagName('encoded')[0].childNodes[0].nodeValue;
                            } else {
                                  var content =items[0].getElementsByTagName('content:encoded')[0].childNodes[0].nodeValue;
                                }


                            if ($(content).find("img:first").length) { 

                                imgsrc = $(content).find("img:first").attr("src");
                                var img = document.createElement('img');
                                img.src = imgsrc;
                                document.getElementById('hdtalkImage').appendChild(img); 
                                var ahdlink = $('<a/>').attr('href', url);
                                $(ahdlink ).attr("target","_blank");
                                $('#hdtalkImage img').wrap(ahdlink);
                            }

                          }
                                              
                    }                    


                    var date = dateElement.firstChild.nodeValue;
                    var pubDate = date;
                    date = new Date(pubDate);
                    var months = Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
                    var datestring =  months[date.getMonth()] + " " + date.getDate() + ", " + " " + date.getFullYear();

                    var categoryElement = items[i].getElementsByTagName("category")[0];
                    var category = categoryElement.firstChild.nodeValue;
                    
                    result=result+'<li><a href="'+url+'" target="_blank">'+title+'</a> '+datestring+' &bull; '+category+'</li>';
                    } 
                result=result+"</ul>"
                var outputDiv = document.getElementById(divId);
                outputDiv.innerHTML = result;
                } 
            });
    }

     function removeHTMLTags(htmlString){
            if(htmlString){
              var mydiv = document.createElement("div");
               mydiv.innerHTML = htmlString;
     
                if (document.all) // IE Stuff
                {
                    return mydiv.innerText;
                    
                }    
                else // Mozilla does not work with innerText
                {
                    return mydiv.textContent;
                }                            
          }
       }
 