$(function(){
    $('.navbar-nav a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
    $('.navbar-nav a').click(function(){
        $(this).parent().addClass('active').siblings().removeClass('active')	
    })
})