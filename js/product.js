$(".inn").click(function (e) { 
    e.preventDefault();
    // alert("ls");
    let v = this.className[8];
    // console.log(this.className[8]);
    // console.log(this.id[2]);
    let p = this.id[2];
    let a = "../img/p-"+p+"/img-"+v+".webp";
    console.log(a);
    $(".main-img").attr("src",a );
    $(".main-img").attr("height","490px" );
});
