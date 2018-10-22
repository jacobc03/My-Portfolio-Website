  $(document).ready(function($){

    var fade = document.querySelector('.fade');
    var topNav = document.querySelector('.top');
    var title = document.querySelector('.title');
    var icons = Array.prototype.slice.call(document.querySelectorAll('.icon'));
    var image = $('img')[0];
    console.log(image)
    var aquarelle = new Aquarelle(image, '/wp-content/themes/portfolio/images/mask.png', {
        autoplay: true,
        loop: true
    });
    aquarelle.addEventListener('created', function() {
        var canvas = this.getCanvas();
        canvas.removeAttribute('style');
        image.parentNode.insertBefore(canvas, image.nextSibling);
        image.parentNode.removeChild(image);
    });
    aquarelle.addEventListener('changed', function(event) {
        fade.style.opacity = this.transitionInRange(1, 0, 7183, 7933);
        topNav.style.opacity = this.transitionInRange(0, 1, 4330, 5660);
        var canvas = this.getCanvas();
        canvas.style.webkitFilter = 'blur(' + this.transitionInRange(0, 24, 3000) + 'px)';
        canvas.style.webkitTransform = canvas.style.transform = 'translate(-50%, -50%) scale(' + this.transitionInRange(.75, 1) + ')';
        title.style.opacity = this.transitionInRange(0, 1, 0, 2016);
        title.style.webkitTransform = title.style.transform = 'scale(' + this.transitionInRange(.8, 1, 0, 5883) + ')';
        icons.forEach(function(icon) {
            icon.style.webkitFilter = 'blur(' + event.target.transitionInRange(4, 0, 3433, 4149) + 'px)';
            icon.style.opacity = event.target.transitionInRange(0, 1, 3433, 4266);
            icon.style.webkitTransform = icon.style.transform = 'scale(' + event.target.transitionInRange(1.3, 1, 3433, 4400) + ')';
        });
    });
});