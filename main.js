var placeholder = "Short Summary";

var projects = [
    {
        "name": "Project Infiltrate Meche",
        "date": "Spring 2015",
        "location": "Kenya",
        "url": "pim",
        "summary": placeholder,
        "img": "project-2-placeholder.jpg",
        "active": true
    },{
        "name": "Pipes are Fun",
        "date": "Spring 2015",
        "location": "Ghana",
        "url": "pin",
        "summary": placeholder,
        "img": "project-2-placeholder.jpg",
        "active": true
    },{
        "name": "Another Project",
        "date": "Spring 2013",
        "location": "MIT",
        "url": "MIT",
        "summary": placeholder,
        "img": "project-2-placeholder.jpg",
        "active": false
    },{
        "name": "Showergy",
        "date": "Spring 2012",
        "location": "lol",
        "url": "lol",
        "summary": placeholder,
        "img": "project-2-placeholder.jpg",
        "active": false
    },{
        "name": "Some words",
        "date": "Spring 2011",
        "location": "idk",
        "url": "idk",
        "summary": placeholder,
        "img": "project-2-placeholder.jpg",
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
            ' <span class="project-location">'+e.location+'</span>\
            </div><div class="project-text">'+e.summary+' <a href="'+e.url+'">read more...</a></div></li>';
        active.append(html);
    } else {
        var html = '<li class="project-description">\
            <div class="project-image"><a href="'+e.url+'"><img src="'+e.img+'"/></a></div>\
            <div class="project-header"><span class="project-date">'+e.date+
            '</span> '+e.name+'</div></div></li>';
        inactive.append(html);
    }
});
