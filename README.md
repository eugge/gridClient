## console.meme
*by [@escusado](https://twitter.com/escusado)*

## What is this?
A stupid express app and a js script to print memes in the console.

![console.meme](http://i.imgur.com/0fh8eZk.png)

## Usage
Paste this in your console or html document.
```
console.meme=function(e,t,n,r){var i="http://lit-atoll-9603.herokuapp.com/api/v1/";if(typeof r==="undefined"){r=200}var s=i+e+"/"+r+"/"+encodeURIComponent(t)+"/"+encodeURIComponent(n);var o="background-image: url("+s+");";o+="background-repeat: no-repeat;";o+="background-position: center center;";r=Math.floor(r/2);o+="padding: "+r+"px "+r+"px; background-size: 100%;";var u="";var a=Math.ceil(r/14)+2;while(a--){u+="\n"}console.log("%c %c"+u,o,"background: none;")}
console.meme('grumpy-cat', 'paste this in my console?...', '...is this it?');
```

Alternatilvely you can set a size too :
``` javascript
console.meme('nobody-got-time', 'Write an extra parameter?', 'Ain t Nobody got time fo that', 300);
```

## Currently supported
* 'y-u-no'
* 'i-dont-always'
* 'orly'
* 'success'
* 'all'
* 'too-damn'
* 'good-news'
* 'not-sure-if'
* 'yo-dawg'
* 'all-your-base'
* 'fuck-you'
* 'have-a-bad-time'
* 'one-does-not-simply'
* 'grumpy-cat'
* 'it-looks-like-you'
* 'feel-bad'
* 'nobody-got-time'
* 'bad-luck-brian-meme'
* 'first-world-problems-ii'
* 'scumbag-steve'
* 'what-if-i-told-you-meme'
* 'san-juan-cholo'
* 'good-guy-greg'
* 'prepare-yourself'
* 'stoner-stanley'
* 'all-the-things'
* 'conspiracy-keanu'
* 'disaster-girl'
* 'pleaseguy'
* 'annoying-facebook-girl'
* 'trollface'
* 'skeptical-3rd-world-kid'
* 'correction-guy'
* 'insanity-wolf'
* 'kill-yourself-guy'
* 'joseph-ducreux'
* 'so-youre-telling-me'
* 'african-children-dancing'

## Comments:
[blog-post](http://code.toily.mx/console-meme/)

## Notes
The image proxy server is deployed on a free Dyno on Heroku, you can deploy your own if you like :)


*this thing uses the npm package memeGenClient by https://npmjs.org/~phill.rosen kudos man!*

*Also the [MemeGenerator API](http://version1.api.memegenerator.net/)*

Free GPL libre whatever use it as you like :)

*I work [@freshout](http://freshout.us) on [@Breezi](http://breezi.com)*