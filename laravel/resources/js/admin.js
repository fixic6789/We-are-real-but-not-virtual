const { nodeName } = require("jquery");

$("#coverForm").fileinput({
    uploadUrl: "/public/cover",
    initialPreview: `<img src='/covers/${post.cover}' class='file-preview-image' alt='${post.cover}'>`,
    initialPreviewConfig: [{
        caption: post.cover,
        size: post.cover_size,
        showDrag: false,
        showRemove: false,
        url: `/posts/deletecover/${post.id}`,
        minFileCount: 1,
    }, ],
    ajaxDeleteSettings: {
        type: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    },
    showRemove: false,
    allowedFileExtensions: ['jpeg', 'jpg', 'png', 'gif', 'pdf'],
});


$("#createForm").fileinput({
    uploadUrl: "/public/images",
    showRemove: true,
    showCancel: false,
    allowedFileExtensions: ['jpeg', 'jpg', 'png', 'gif', 'pdf'],
});

var initialPreviewConfigArray = [];
var initialPreviewArray = [];

for (var i = 0; i < images.length; i++) {
    initialPreviewConfigArray.push({
        caption: images[i].image,
        size: images[i].image_size,
        key: i,
        url: `/admin/posts/deleteimage/${images[i].id}`,
        showDrag: false,
    });

    initialPreviewArray[i] = `<img src='/images/${images[i].image}' class='file-preview-image'>`;
}

$("#updateForm").fileinput({
    mainClass: "input-group-lg",
    overwriteInitial: false,
    initialPreview: initialPreviewArray,
    initialPreviewConfig: initialPreviewConfigArray,
    maxFileCount: 7,
    maxTotalFileCount: 7,
    validateInitialCount: true,
    minFileCount: 1,
    allowedFileExtensions: ['jpeg', 'jpg', 'png', 'gif', 'pdf'],
    ajaxDeleteSettings: {
        type: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    },
    showCancel: false,
});