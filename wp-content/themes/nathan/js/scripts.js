$(document).ready(function() {
    let body = $('.home');
    let screenWidth = $(window).width();
    const delay = ms => new Promise(res => setTimeout(res, ms));

    const setGlitchBackground = async () => {

        if(screenWidth < 769) {
            body.css( 'background', `url('./wp-content/themes/nathan/assets/mcg-landing-glitch.png') no-repeat 58% calc(0vh - 11%) / calc(100vh + 100%), linear-gradient(#e8edf0, #fff) no-repeat` );
            await delay(100)
            body.css( 'background', `url('./wp-content/themes/nathan/assets/mcg-landing.png') no-repeat 58% calc(0vh - 11%) / calc(100vh + 100%), linear-gradient(#e8edf0, #fff) no-repeat` );
        } else {
            body.css( 'background', `url('./wp-content/themes/nathan/assets/mcg-landing-glitch.png') no-repeat 75% 0 / calc(100vh + 28%), linear-gradient(#e8edf0, #fff) no-repeat` );
            await delay(100)
            body.css( 'background', `url('./wp-content/themes/nathan/assets/mcg-landing.png') no-repeat 75% 0 / calc(100vh + 28%), linear-gradient(#e8edf0, #fff) no-repeat` );
        }
        
    }

    setInterval(() => {
            setGlitchBackground();
      }, 10000)
})