<style>
    .previews {
        overflow: hidden;
        border: 1px solid #ccc;
    }

    /* Ensure the size of the image fit the container perfectly */
    img {
        display: block;

        /* This rule is very important, please don't ignore this */
        width: 100%;
    }

</style>
<!-- Wrap the image or canvas element with a block element (container) -->
<div>
    <div class="row">
        <div class="col-4">
            <div class="previews bordered"></div>
        </div>
        <div class="col-8">
            <div class="img-container">
                <img id="image" src="public/imagers/cropped.jpg" class='draggable'>
            </div>
            <div id="actions" class="buttons">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="move"
                        title="Move">
                        <span class="docs-tooltip" data-toggle="tooltip" title="cropper.setDragMode(&quot;move&quot;)">
                            <span class="fa fa-arrows-alt"></span>
                        </span>
                    </button>
                    <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop"
                        title="Crop">
                        <span class="docs-tooltip" data-toggle="tooltip"
                            title="cropper.setDragMode(&quot;crop&quot;)">
                            <span class="fa fa-crop-alt"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
@push('page_scripts')
    <script>
        $(function() {

            var $image = $('#image');
            var previews = $('.previews');
            var previewReady = false;
            var cropBoxData;
            var canvasData;
            var cropper;

            $('#exampleModal').on('shown.bs.modal', function() {
                $image.cropper({
                    aspectRatio: 9 / 9,
                    viewMode: 1,
                    dragMode: 'move',
                    autoCropArea: 0.5,
                    restore: false,
                    guides: true,
                    center: true,
                    highlight: true,
                    cropBoxMovable: false,
                    cropBoxResizable: false,
                    modal: true,
                    background: false,
                    guides: false,
                    toggleDragModeOnDblclick: false,
                    ready: function() {
                        var clone = this.cloneNode();

                        clone.className = '';
                        clone.style.cssText = (
                            'display: block;' +
                            'width: 100%;' +
                            'min-width: 0;' +
                            'min-height: 0;' +
                            'max-width: none;' +
                            'max-height: none;'
                        );

                        each(previews, function(elem) {
                            elem.appendChild(clone.cloneNode());
                        });
                        previewReady = true;
                        //Should set crop box data first here
                        //cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
                    },
                    crop: function(event) {
                        if (!previewReady) {
                            return;
                        }

                        var data = event.detail;
                        var cropper = this.cropper;
                        var imageData = cropper.getImageData();
                        var previewAspectRatio = data.width / data.height;
                        console.log(data.width);
                        each(previews, function(elem) {
                            var previewImage = elem.getElementsByTagName('img').item(0);
                            var previewWidth = elem.offsetWidth;
                            var previewHeight = previewWidth / previewAspectRatio;
                            var imageScaledRatio = data.width / previewWidth;

                            elem.style.height = previewHeight + 'px';
                            previewImage.style.width = imageData.naturalWidth /
                                imageScaledRatio + 'px';
                            previewImage.style.height = imageData.naturalHeight /
                                imageScaledRatio + 'px';
                            previewImage.style.marginLeft = -data.x / imageScaledRatio +
                                'px';
                            previewImage.style.marginTop = -data.y / imageScaledRatio +
                                'px';
                        });
                    },
                });
            }).on('hidden.bs.modal', function() {
                cropBoxData = cropper.getCropBoxData();
                canvasData = cropper.getCanvasData();
                cropper.destroy();
            });
        });
    </script>
@endpush
