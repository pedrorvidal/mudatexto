"use strict";

function firstLetterUpper(theString) {
  var newString = theString.toLowerCase().replace(/(^\s*\w|[\.\!\?]\s*\w)/g,function(c){return c.toUpperCase()});
  return newString;
}

function convertToSentenceCase() {
  var theString = document.convertForm.theString.value;
  var lower = theString.toLowerCase();
  var newString = firstLetterUpper(lower);
  document.getElementById('theString').value = newString;
}

function convertToUpper() {
  var theString = document.convertForm.theString.value;
  var newString = theString.toUpperCase();
  document.getElementById('theString').value = newString;
}

function convertToLower() {
  var theString = document.convertForm.theString.value;
  var newString = theString.toLowerCase();
  document.getElementById('theString').value = newString;
}

function convertToCapitalized() {
  var theString = document.convertForm.theString.value;
  var newString = theString.toLowerCase();
  const finalSentence = newString.replace(/(^\w{1})|(\s+\w{1})/g, letter => letter.toUpperCase());
  document.getElementById('theString').value = finalSentence;
}

/**
 * Alternate Case helper function
 *
 * @param {s} string to be converted
 * @return {chars} converted
 */
function alternateCase(s) {
  var chars = s.toLowerCase().split("");
  for (var i = 0; i < chars.length; i += 2) {
    chars[i] = chars[i].toUpperCase();
  }
  return chars.join("");
};

function convertToAlternateCase() {
  var theString = document.convertForm.theString.value;
  var newString = alternateCase(theString);
  document.getElementById('theString').value = newString;
}

/**
 * Invert Case Helper Function
 *
 * @param {str} string to be converted
 * @return {s} converted string
 */
function invertCase(str) {
  var s = '';
  var i = 0;
  while (i < str.length) {
      var n = str.charAt(i);
      if (n == n.toUpperCase()) {
          // *Call* toLowerCase
          n = n.toLowerCase();
      } else {
          // *Call* toUpperCase
          n = n.toUpperCase();
      }

      i += 1;
      s += n;
  }
  return s;
}

function convertToInverseCase() {
  var theString = document.convertForm.theString.value;
  var newString = invertCase(theString);
  document.getElementById('theString').value = newString;
}

