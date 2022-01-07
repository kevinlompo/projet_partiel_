<input placeholder="data"> 
                                    <button>Generate QR!</button><br><br>
                                    <img src>
                                    <script> var parametersJson = {
	"size": 250, // Size of Qr Code
	"backgroundColor": "38-38-38", // Background Color Of Qr Code (In RGB)
	"qrColor": "255-255-255", // Color of Qr Code (In RGB)
	"padding": 2, // Padding 
	"data": "dev.to"
};

var parameters;

var btn = document.querySelector("button");
var img = document.querySelector("img");
var input = document.querySelector("input");

btn.addEventListener("click", function(){
	parametersJson.data = input.value || "dev.to";
	parameters = `size=${parametersJson.size}&bgcolor=${parametersJson.backgroundColor}&color=${parametersJson.qrColor}&qzone=${parametersJson.padding}&data=${parametersJson.data}` // Stitch Together all Paramenters
	img.src = `https://api.qrserver.com/v1/create-qr-code/?${parameters}` // Set Image URL To Link
});</script>