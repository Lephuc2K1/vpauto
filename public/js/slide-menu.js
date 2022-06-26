var KichThuoc = document.getElementsByClassName("mega-company-row")[0].clientWidth;
var ChuyenSlide = document.getElementsByClassName("mega-company-slide-tap")[0];
var Img = ChuyenSlide.getElementsByClassName("mega-company-slide");
var Max = KichThuoc * Img.length;
Max -= KichThuoc;

var Chuyen = 0;
// phải
function Next(){
	
	if(Chuyen < Max) 
	Chuyen += 60;
	else 
	Chuyen = 0;
	ChuyenSlide.style.marginLeft = '-' + Chuyen + 'px';
}
// trái 
function Back(){
	if(Chuyen == 0) Chuyen = Max;
	else 
	Chuyen -=60;
	ChuyenSlide.style.marginLeft = '-' + Chuyen + 'px';
}
//chạy nhiều lặp đi lặp lại 

//setInterval(function(){
//	Next();
//}, 3000);
////chỉ chạy một lần duy nhất
//setTimeout(function(){
//	Next();
//}, 3000);
// Chạy ảnh banner
//var KichThuocs = 100;
//var ChuyenSlides = document.getElementsByClassName("banner-slide")[0];
//var Imgs = ChuyenSlides.getElementsByClassName("img-slide");
//var Maxs = KichThuocs * Imgs.length;
//Maxs -= 100;
//var Chuyens = 0;
//function Nexts(){
//	
//	if(Chuyens < Maxs) 
//	Chuyens +=100;
//	else 
//	Chuyens = 0;
//	ChuyenSlides.style.marginLeft = '-' + Chuyens + '%';
//}
//
//function Backs(){
//
//	if(Chuyens == 0) Chuyens = Maxs;
//	else 
//	Chuyens -= 100;
//	ChuyenSlides.style.marginLeft = '-' + Chuyens + '%';
//}
//setInterval(function(){
//	Nexts();
//}, 5000);
// Khỏi tạo biến bằng giá trị gọi thẻ trong java 
		