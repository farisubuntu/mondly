console.log('scripts/quick_selectors.js ......');
var words_array;
var images_array;
var phrases_array;
function getSectionVariables() {
//  select all words (one line container of (target,mother} =>
words=document.querySelectorAll('.list > .is-content-card-wrapper:first-child > .words > .word');
-//select all image urls for words, images_container[x].style.background-image=url("xxx")
images_container=document.querySelectorAll('.word-inner .phrase-image'); 
// TODO: images_urls= ...
//------------------------
// select all phrases (one line container of (text elements {target,mother} ) =>
phrases=document.querySelectorAll('.phrase .text');
}
