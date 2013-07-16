var _timerOut       = 0,
    _timerDuration  = 450,
    _currentPage;

$(document).ready(function() {
    
    _currentPage = $('body').attr('class');
    
});

$(window).load(function() {
    
    
    
});

$(window).bind('resize', function() {
    
    clearTimeout(_timerOut);
    _timerOut = setTimeout(function() {
        
        
        
    }, 150);
    
});
