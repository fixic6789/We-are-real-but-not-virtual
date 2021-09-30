const { nodeName } = require("jquery");

$("#coverForm").fileinput({
    uploadUrl: "/public/cover",
    initialPreview: cover,
    initialPreviewConfig: [
        {
            caption: coverName,
            size: coverSize,
            showDrag: false,
            showRemove: false,
            url: coverDeleteUrl,
            minFileCount: 1,
        },
    ],
    ajaxDeleteSettings: {
        type: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    },
    showRemove: false,
    allowedFileExtensions: ['jpeg','jpg','png','gif','pdf'],
});


$("#createForm").fileinput({
    uploadUrl: "/public/images",
    showRemove: true,
    showCancel: false,
    allowedFileExtensions: ['jpeg','jpg','png','gif','pdf'],
});

var initialPreviewConfigArray = [];

for (var i = 0; i < imageName.length; i++) {
  initialPreviewConfigArray.push({
      caption: imageName[i],
      size: imageSize[i],
      key: i,
      url: imageDeleteUrl[i],
      showDrag: false,
  });
}

$("#updateForm").fileinput({
    mainClass: "input-group-lg",
    overwriteInitial: false,
    initialPreview: posts,
    initialPreviewConfig: initialPreviewConfigArray,
    maxFileCount: 7,
    maxTotalFileCount: 7,
    validateInitialCount: true,
    minFileCount: 1,
    allowedFileExtensions: ['jpeg','jpg','png','gif','pdf'],
    ajaxDeleteSettings: {
        type: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    },
    showCancel: false,
});