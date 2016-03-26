/* Generate Projects Section */

var placeholder = "Short Summary";

var projects = [
    {
        "name": "Project Infiltrate Meche",
        "date": "Spring 2015",
        "location": "kenya",
        "url": "pim",
        "summary": placeholder,
        "img": "images/project-2-placeholder.jpg",
        "active": true
    },{
        "name": "Pipes are Fun",
        "date": "Spring 2015",
        "location": "ghana",
        "url": "pin",
        "summary": placeholder,
        "img": "images/project-2-placeholder.jpg",
        "active": true
    },{
        "name": "Another Project",
        "date": "Spring 2013",
        "location": "MIT",
        "url": "MIT",
        "summary": placeholder,
        "img": "images/project-2-placeholder.jpg",
        "active": false
    },{
        "name": "Showergy",
        "date": "Spring 2012",
        "location": "lol",
        "url": "lol",
        "summary": placeholder,
        "img": "images/project-2-placeholder.jpg",
        "active": false
    },{
        "name": "Some words",
        "date": "Spring 2011",
        "location": "idk",
        "url": "idk",
        "summary": placeholder,
        "img": "images/project-2-placeholder.jpg",
        "active": false
    },
]

var proj = $('.all-projects');
var active = $('<ul class="featured-projects"></ul>').appendTo(proj);
var inactive = $('<ul class="other-projects"></ul>').appendTo(proj);

projects.forEach(function(e){
    if(e.active) {
        var html = '<li class="project-description">\
            <div class="project-image"><a href="'+e.url+'"><img src="'+e.img+'"/></a></div>\
            <div class="project-header">'+e.name+
            ' <span class="project-location gray">'+e.location+'</span>\
            </div><div class="project-text">'+e.summary+' <a href="'+e.url+'">read more...</a></div></li>';
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