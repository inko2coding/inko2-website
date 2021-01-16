<div class="testimonials" id="testimonials">
        <div class="inner">
            <h1>Testimonials</h1>
            <div class="border"></div>
            <div class="row">

            </div>
            <div class="btn-cont" style="margin-top: 20px;">
                <a class="btn" href="../about/testimonials">All Testimonials</a>
                <br><br>
            </div>
        </div>

</div>
<script src="../js/reveiws.js"></script>
<script>

    for (let i = 0; i < 3; i++) {
        let one;
        let two;
        let three;
        let four;
        let five;

        let ratingNum = reviews[i].rating;
        if (ratingNum === 5) {
            one = 'fas';
            two = 'fas';
            three = 'fas';
            four = 'fas';
            five = 'fas';
        } else if (ratingNum === 4) {
            one = 'fas';
            two = 'fas';
            three = 'fas';
            four = 'fas';
            five = 'far';
        } else if (ratingNum === 3) {
            one = 'fas';
            two = 'fas';
            three = 'fas';
            four = 'far';
            five = 'far';
        } else if (ratingNum === 2) {
            one = 'fas';
            two = 'fas';
            three = 'far';
            four = 'far';
            five = 'far';
        } else if (ratingNum === 1) {
            one = 'fas';
            two = 'far';
            three = 'far';
            four = 'far';
            five = 'far';
        } else if (ratingNum === 0) {
            one = 'far';
            two = 'far';
            three = 'far';
            four = 'far';
            five = 'far';
        } else {
            one = 'fas';
            two = 'fas';
            three = 'fas';
            four = 'fas';
            five = 'fas';
        }
        var stars = [one, two, three, four, five];
        document.querySelector('#testimonials.testimonials .inner .row').innerHTML += `
                <div class="col">
                    <div class="testimonial">
                        <img src="../images/${reviews[i].imageSrc}">
                        <div class="name">${reviews[i].name}</div>
                        <div class="stars">
                            <i class="${stars[0]} fa-star"></i>
                            <i class="${stars[1]} fa-star"></i>
                            <i class="${stars[2]} fa-star"></i>
                            <i class="${stars[3]} fa-star"></i>
                            <i class="${stars[4]} fa-star"></i>
                        </div>
                        <i class="fas fa-quote-left"></i>
                        <p class="${reviews[i].textSize}-txt">${reviews[i].testimonial}
                        </p>
                    </div>
                </div>
        `;
    }
</script>