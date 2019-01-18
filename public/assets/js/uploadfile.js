var myDropzone = new Dropzone("form#dropzone", { // Make the whole body a dropzone
    url: '/',
    addRemoveLinks: true,
    method: 'put',
    chunking: true,
    forceChunking: true,
    autoQueue: false,
    autoProcessQueue: false
});
myDropzone.autoDiscover = false;

myDropzone.on("addedfile", function(file) {
    var reader = new FileReader();
    if (myDropzone.files.length < 4) {
        reader.onload = function(event) {
            // event.target.result contains base64 encoded image
            console.log("file being uploaded ")
            storage_upload("image", event.target.result, file, myDropzone, (r) => {
                console.log("Storage upload response")
                console.log(r)
            })
        };
        reader.readAsDataURL(file);
    } else {
        console.log('skipping file as we are excceding the upload limit')
    }
});

myDropzone.on("removedfile", function(file) {
    var storageRef = firebase.storage().ref("/");
    storageRef.child(file.fullPath).delete().then(
        function() {
            console.log(file.fullPath + " deleted succefuly")
        }).catch(function(error) {
        console.log("Something is wrong")
        console.log(error)
    });
});
});
function storage_upload(filedata, filehandle, DropzoneHandle, cb) {

    // Getting Handle of the progressbar element of current file //
    var progressBar = filehandle.previewElement.children[2]

    // Firestore storage task
    var task
    // uuid for file being uploaded
    var uuid_string = uuid()

    // Getting Storeage referance for file
    var storageRef = firebase.storage().ref(User.client_id + "/" + uuid_string);

    // Because I am uploading file in base64 data_url //
    task = storageRef.putString(filedata, 'data_url');

    // Making progress bar of current file preview element visible
    progressBar.opacity = 1

    task
        .on(firebase.storage.TaskEvent.STATE_CHANGED,

            // Trakcing progress of upload
            function progress(snapshot) {
                var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;

                // Updating progressbar width - to make it look like filling
                progressBar.children[0].style.width = progress + '%'

            },

            // Firebase storeage upload error handling
            function(error) {
                // Hanlde your way
                // A full list of error codes is available at
                // https://firebase.google.com/docs/storage/web/handle-errors
            },

            // Finishing process and returing data
            // Returning file-meta and  url
            // and hiding progress bar
            function() {

                // Upload completed successfully, now we can get the meta data of file
                task.snapshot.ref.getMetadata().then(function(meta) {
                    // Getting download url of file
                    task.snapshot.ref.getDownloadURL().then(function(downloadUrl) {

                        // storing meta data and download url in object and returning
                        // it to callign function ...
                        var response = {
                            object_info: {
                                publicURL: downloadUrl,
                                metainfo: meta
                            },
                            type_of_object: type
                        }
                        filehandle.fullPath = meta.fullPath
                        return cb(response)
                    })
                })

                // Hiding progress bar for current file
                progressBar.style.opacity = 0
            }
        )

}
