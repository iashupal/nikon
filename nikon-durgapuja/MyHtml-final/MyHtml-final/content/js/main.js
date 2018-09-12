// Copyright 2015, Google, Inc.
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//    http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.


// Expecting this line in file named key.js
// var apiKey = "[YOUR API KEY HERE]";
var apiKey = "AIzaSyAPbW5uWvQ9fvqtWcWJXQ3jW3hX7ya36uA"
var CV_URL = "https://vision.googleapis.com/v1/images:annotate?key=" + apiKey;

$(document).ready(function () {
    $('#fileform').on('submit', uploadFiles);
});

/**
 * 'submit' event handler - reads the image bytes and sends it to the Cloud
 * Vision API.
 */
function uploadFiles(event) {
    //event.preventDefault(); // Prevent the default form post

    // Grab the file and asynchronously convert to base64.
    var file = $("#imageupload").val();
    console.log(file);
    var reader = new FileReader();
    reader.onloadend = processFile;
    reader.readAsDataURL(file);
}

/**
 * Event handler for a file's data url - extract the image data and pass it off.
 */
function processFile(event) {
    var content = event.target.result;
    sendFileToCloudVision(
        content.replace("data:image/jpeg;base64,", ""));
}

/**
 * Sends the given file contents to the Cloud Vision API and outputs the
 * results.
 */
function toDataUrl(url, callback) {
    var xhr = new XMLHttpRequest();
    xhr.responseType = 'blob';
    xhr.onload = function () {
        var reader = new FileReader();
        reader.onloadend = function () {
            callback(reader.result);
        }
        reader.readAsDataURL(xhr.response);
    };
    xhr.open('GET', url);
    xhr.send();
}

function test() {
    var imageeee = $("#imageupload").val();
    toDataUrl(imageeee, function (base64Img) {
        base64Img = base64Img.replace("data:image/jpeg;base64,", "");
        base64Img = base64Img.replace("data:image/png;base64,", "")
        base64Img = base64Img.replace("data:image/jpg;base64,", "")
        //alert(replpng)
        sendFileToCloudVision(base64Img);
    });
}

function sendFileToCloudVision(content) {   
    
    
    //var type = $("#fileform [name=type]").val();

    // Strip out the file prefix when you convert to json.
    var request = {
        requests: [{
            image: {
                content: content
            },
            features: [{
                type: 'SAFE_SEARCH_DETECTION',
                maxResults: 200
            }]
        }]
    };

    //$('#results').text('Loading...');
    $.post({
        url: CV_URL,
        data: JSON.stringify(request),
        contentType: 'application/json'
    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert('fail')
        console.log(textStatus)
        console.log(errorThrown)
        
    }).done(displayJSON);
}

/**
 * Displays the results.
 */
function displayJSON(data) {
    var adultresponse = data.responses[0].safeSearchAnnotation.adult;
    console.log(adultresponse)
    if (adultresponse == 'LIKELY' || adultresponse == 'VERY_LIKELY') {
        alert('sorry please select another image')
    }
    else {
        $('#upload-picture').hide();
        $('#div2').addClass("disabled");
        $('#select-camera').show();
        $('#div3').addClass("selected");
    }
    //var contents = JSON.stringify(data, null, 4);
    //console.log(contents)
}