
// Initialize Firebase
var config = {
    apiKey: "AIzaSyCAmo8zwlxQZkxKR4ietq6-H1utKrI3nMk",
    authDomain: "upload-img-53195.firebaseapp.com",
    databaseURL: "https://upload-img-53195.firebaseio.com",
    projectId: "upload-img-53195",
    storageBucket: "upload-img-53195.appspot.com",
    messagingSenderId: "708844398132"
};
firebase.initializeApp(config);

//function to save file
function previewFile(event) {
    document.getElementById("view2").innerHTML="";
    document.getElementById("view").classList.add("loader01");
    var storageRef = firebase.storage().ref();
    var file = document.getElementById("files").files[0];
    // Create the file metadata
    var metadata = {
        contentType: file.metadata
    };

    // Upload file and metadata to the object 'images/mountains.jpg'
    var uploadTask = storageRef.child(file.name).put(file, metadata);

    // Listen for state changes, errors, and completion of the upload.
    uploadTask.on(
        firebase.storage.TaskEvent.STATE_CHANGED, // or 'state_changed'
        function(snapshot) {
            // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
            var progress =
                (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
            console.log("Upload is " + progress + "% done");
            switch (snapshot.state) {
                case firebase.storage.TaskState.PAUSED: // or 'paused'
                    console.log("Upload is paused");
                    break;
                case firebase.storage.TaskState.RUNNING: // or 'running'
                    console.log("Upload is running");
                    break;
            }
        },
        function(error) {
            // A full list of error codes is available at
            // https://firebase.google.com/docs/storage/web/handle-errors
            switch (error.code) {
                case "storage/unauthorized":
                    // User doesn't have permission to access the object
                    break;

                case "storage/canceled":
                    // User canceled the upload
                    break;

                case "storage/unknown":
                    // Unknown error occurred, inspect error.serverResponse
                    break;
            }
        },
        function() {
            // Upload completed successfully, now we can get the download URL
            uploadTask.snapshot.ref
                .getDownloadURL()
                .then(function(downloadURL) {
                    var imgElements =
                        localStorage.getItem("temImg") != undefined
                            ? JSON.parse(localStorage.getItem("temImg"))
                            : new Array();

                    imgElements.push([{ url: downloadURL, img: file.name }]);

                    localStorage.setItem("temImg", JSON.stringify(imgElements));
                    var items = JSON.parse(localStorage.getItem("temImg"));

                    for (var i = 0; i < items.length; i++) {
                        var x = document.createElement("IMG");
                        x.setAttribute("src", imgElements[i][0]["url"]);
                        x.setAttribute("class", ' img-responsive padding-5');

                        document.getElementById("view2").appendChild(x);
                        var input = document.createElement("input");
                        input.type = "hidden";
                        input.name = "imgurl["+i+"]";
                        input.value = imgElements[i][0]["url"]; // set the CSS class
                        document.getElementById("form").appendChild(input)
                    }
                    document.getElementById("view").classList.remove("loader01");
                });
        }
    );
};

function deleteFilesFirebase(element){
    var storageRef = firebase.storage().ref();
    var desertRef = storageRef.child(element);

    // Delete the file
    desertRef.delete().then(function() {
        // File deleted successfully
    }).catch(function(error) {
        // Uh-oh, an error occurred!
    });



};

function clearImgTemp(){
    localStorage.removeItem('temImg')
}

function deleteItems(){
    var imgElements =JSON.parse(localStorage.getItem("temImg"))
    for (var i = 0; i < imgElements.length; i++) {
        console.log(imgElements[i][0]["img"]);
        deleteFilesFirebase(imgElements[i][0]["img"]);

    }
    localStorage.removeItem('temImg')

};
