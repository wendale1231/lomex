<div id="stickycrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?p=getproducts">Products</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $products[0]["product_name"] }}</li>
    </ol>
</div>

<div class="page-header" style="background-image: url(img/products/{{ $products[0]['image_source'] }});">
</div>
<div class="product-name">
    <h2><b id="p-name">{{ $products[0]["product_name"] }}</b></h2>
</div>
<form action="">
<div class="card" style="border-radius: 0 !important;">
    <div class="card-section overflow-auto">
        <div class="container">
            <div class="row">
                <div class="card col mx-1 shadow">
                    <h5 class="card-header">Images</h5>
                    <div class="card-body">
                        <div class="row mb-5 px-3">
                            <div class="col-4">
                                <img class="border" width="200" src="img/products/{{ $products[0]['image_source'] }}">
                            </div>
                            <div class="col">
                                <div class="row my-1">
                                    <div class="col"><img class="border" width="100" height="100" src="img/products/{{ $products[0]['image_source'] }}"></div>
                                    <div class="col"><img class="border" width="100" height="100" src="img/products/{{ $products[0]['image_source'] }}"></div>
                                    <div class="col"><img class="border" width="100" height="100" src="img/products/{{ $products[0]['image_source'] }}"></div>
                                </div>
                                <div class="row my-1">
                                    <div class="col"><img class="border" width="100" height="100" src="img/products/{{ $products[0]['image_source'] }}"></div>
                                    <div class="col"><img class="border" width="100" height="100" src="img/products/{{ $products[0]['image_source'] }}"></div>
                                    <div class="col">
                                        <div class="browse">
                                            <input type="file" class="browse-file" />
                                            <div class="browse-file-img">
                                                <img width="100" src="https://png.pngtree.com/png-vector/20190216/ourlarge/pngtree-vector-plus-icon-png-image_541694.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <div class="row my-3">
                            <div class="col">
                                <div class="form-group mx-1">
                                    <label for="p-nameinput">Product Name</label>
                                    <input class="form-control" id="p-nameinput" type="text" value="{{ $products[0]['product_name'] }}">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group mx-1">
                                    <label for="p-ribboninput">Ribbon</label>
                                    <input class="form-control"id="p-ribboninput" type="text" placeholder="eg., New Item.">
                                </div>
                            </div>
                        </div>
                        <div class="w-25">
                            <label class="mx-1" for="p-priceinput">Price</label>
                            <div class="input-group mb-3 mx-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="price-icon">₱</span>
                                </div>
                                <input type="number" class="form-control" id="p-priceinput" placeholder="Price" aria-label="Price" aria-describedby="price-icon">
                            </div>
                        </div>
                        <div class="custom-control custom-switch mx-1 mb-3">
                            <input type="checkbox" class="custom-control-input" id="discountswitch">
                            <label class="custom-control-label" for="discountswitch">On Sale</label>
                        </div>
                        <div class="row w-50 mb-3" id="discount-form" style="display: none">
                            <div class="col">
                                <label class="mx-1" for="p-discountinput">Discount</label>
                                <div class="input-group mb-3 mx-1">
                                    <input type="number" class="form-control" id="p-discountinput" placeholder="Discount" aria-label="Discount" aria-describedby="discount-icon">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="discount-icon">%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label class="mx-1" for="p-priceinput">Sale Price</label>
                                <div class="input-group mb-3 mx-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="price-icon">₱</span>
                                    </div>
                                    <input type="number" class="form-control" id="p-priceinput" placeholder="Price" aria-label="Price" aria-describedby="price-icon">
                                </div>
                            </div>
                        </div>
                        <div class="custom-control custom-switch mx-1 mb-3">
                            <input type="checkbox" class="custom-control-input" id="priceperunitswitch">
                            <label class="custom-control-label" for="priceperunitswitch">Show Price per Unit</label>
                        </div>
                        <div class="row mb-3" id="priceperunit-form" style="display: none">
                            <div class="col">
                                <label class="mx-1" for="p-quantityunit">Total Product Quantity in Units</label>
                                <div class="input-group mb-3 mx-1">
                                    <input type="number" class="form-control" id="p-quantityunit" placeholder="Discount" aria-label="Discount" aria-describedby="discount-icon">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="discount-icon">%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label class="mx-1" for="p-baseunitinput">Base Units</label>
                                <div class="input-group mb-3 mx-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="price-icon">₱</span>
                                    </div>
                                    <input type="number" class="form-control" id="p-baseunitinput" placeholder="Price" aria-label="Price" aria-describedby="price-icon">
                                </div>
                            </div>
                            <div class="w-25">
                                <label class="mx-1" for="p-priceperunit">Base Price per Units</label>
                                <div class="input-group mb-3 mx-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="priceperunit-icon">₱</span>
                                    </div>
                                    <input type="number" class="form-control" id="p-priceperunit" placeholder="Price Per Unit" aria-label="Price Per Unit" aria-describedby="priceperunit-icon" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mx-1">
                            <label for="p-descriptioninput">Description</label>
                            <textarea class="form-control" id="p-descriptioninput" name="description"></textarea>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </div>
                <div class="card col-3 mx-1 shadow">
                    <h5 class="card-header">Category</h5>
                    <div class="card-body">
                        This is Cateogry Page
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<script>
    CKEDITOR.replace('description');
    $("#p-nameinput").on("input", function(){
        $("#p-name").text($(this).val());
    });
    $("#discountswitch").on('change', function(e){
        if($(this).is(":checked")){
            $("#discount-form").slideDown(500);
        }else{
            $("#discount-form").slideUp(500);
        }
    });
    $("#priceperunitswitch").on('change', function(e){
        if($(this).is(":checked")){
            $("#priceperunit-form").slideDown(500);
        }else{
            $("#priceperunit-form").slideUp(500);
        }
    });
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};

    // Get the navbar
    var navbar = document.getElementById("stickycrumb");

    // Get the offset position of the navbar
    var sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
    }
</script>