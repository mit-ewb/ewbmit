/* Generate Projects Section */

var projects = [
    {
        "name": "charcoal",
        "date": "Spring 2016",
        "location": "tanzania",
        "url": "",
        "summary": "we're developing tech to make useful plastic objects out of waste plastic bags.",
        "img": "images/charcoal-1.png",
        "active": true
    },{
        "name": "rammed earth",
        "date": "Spring 2016",
        "location": "ghana",
        "url": "",
        "summary": "we're building a processing plant using sustainable construction techniques.",
        "img": "images/rammed-earth-1.png",
        "active": true
    }
]

var proj = $('.all-projects');
var active = $('<ul class="featured-projects"></ul>').appendTo(proj);
var inactive = $('<ul class="other-projects"></ul>').appendTo(proj);

projects.forEach(function(e){
    if(e.active) {
        // TODO: Add a page for each project that we can link to.
        // var html = '<li class="project-description">\
        //     <div class="project-image"><a href="'+e.url+'"><img src="'+e.img+'"/></a></div>\
        //     <div class="project-header">'+e.name+
        //     ' <span class="project-location gray">'+e.location+'</span>\
        //     </div><div class="project-text">'+e.summary+' <a href="'+e.url+'">read more...</a></div></li>';
        var html = '<li class="project-description">\
            <div class="project-image"><img src="'+e.img+'"/></div>\
            <div class="project-header">'+e.name+
            ' <span class="project-location gray">'+e.location+'</span>\
            </div><div class="project-text">'+e.summary+'</div></li>';
        active.append(html);
    } else {
        var html = '<li class="project-description">\
            <div class="project-image"><a href="'+e.url+'"><img src="'+e.img+'"/></a></div>\
            <div class="project-header"><span class="project-date gray">'+e.date+
            '</span> '+e.name+'</div></div></li>';
        inactive.append(html);
    }
});

/* Add Scrolling Animations */

$('.navbar li').click(function() {
    // Update active section
    $('.navbar li').removeClass('active');
    $(this).closest('li').addClass('active');
    // Scrolling animation to section
    $.scrollTo("#" + (this.id.substring("navbar-".length)), 500);
    return false;
});