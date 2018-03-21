// JS module to grab blog post data in JSON format from WP Blogs
var LoadBlogPosts = (function() {

    //checks to see if jquery is loaded
    if ( !$ || !jQuery ) {
        throw "Error: jQuery not loaded on page";
    }

    // displays debug info on console
    var debug = false;

    function getData(url, datatype, id) {

        if (debug) {
            console.log("getData()");
        }
        
        $.get(url, function(data) {
            displayData(data, id)
        }, datatype);
    }

    function displayData(data, id) {

        if (debug) {
            console.log("displayData() for div id=" + id);
            console.log(data);
        }

        switch(id) {
            case 'hdtalksblog_rss':
                hdTalksBlog(data, id);
                break;
            case 'industrynews_rss':
                console.log(id);
                break;
            default:
                console.log("No case for provided ID");
        }
    }

    function hdTalksBlog(data, id) {

        var numBlogPosts = 4,
            result = "<ul>";

        if (data.length < numBlogPosts) {
            numBlogPosts = data.length;
        }

        for (var i = 0; i < numBlogPosts; i++) {

            var title = data[i].title.rendered,
                link = data[i].link,
                date = getDateString(new Date(data[i].date))
                content = data[i].content.rendered,
                category = data[i].p_cat[0]['cat_name'],
                imgsrc = $(content).find("img:first").attr("src");

            if (i == 0) {
                var imgElem = document.createElement('img');
                imgElem.src = imgsrc;

                $('#' + id).append(imgElem);
                $('#' + id + ' img').wrap('<a href="' + link +'" target="_blank"></a>');
            }

            result += '<li><a href="' + link + '" target="_blank">' + title + '</a> ' + date + ' &bull; ' + category + '</li>';

            if (debug) {
                console.log(data.length);
                console.log(title);
                console.log(link);
                console.log(date);
                //console.log(content);
                console.log(category);
                console.log(imgsrc);
            }
        }

        result += "</ul>";
        $('#' + id).append(result);

    }

    function getDateString(date) {

        var months = Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
        return months[date.getMonth()] + " " + date.getDate() + ", " + " " + date.getFullYear();

    }

    return {
        start: function(url, type, id) {

            if (!url || !type || !id) {
                throw "Error: The provided arguments are incorrect (Usage: LoadBlogPosts.start(url, datatype, div id)";
            }

            // start module
            console.log("LoadBlogPost Start for " + url);
            getData(url, type, id);
        }
    }
})();