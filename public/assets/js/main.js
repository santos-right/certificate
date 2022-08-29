const passportEl = document.getElementById('passport');
const imgPreviewEl = document.getElementById('image');

passportEl.addEventListener("change", handlePassport);

function handlePassport(e){
	// console.log('selected')
	const reader = new FileReader();

	let file = e.target.files[0];

	if(file){
		console.log(file)
		const { type } = file;

		if(type === "image/png" || type === "image/jpeg"){
			console.log(file.type)

			// this.setState(()=>({ picture: file }));
			reader.onload = () =>{

				// this.setState(()=>({
				// 	dispImg: reader.result
				// }))

				imgPreviewEl.setAttribute('src', reader.result);

			}
		}else{
			// this.setState(()=>({ response: 'Please upload an image', bg: 'warning' }))
			alert('Please upload an image');
		}
		reader.readAsDataURL(file);

	}else{
		// fallback
		imgPreviewEl.setAttribute('src', "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHsAAAB7CAMAAABjGQ9NAAAAOVBMVEWVu9////+QuN7z9/uLtdz6/P3m7vfH2u22z+jh6/Xt8/mavuCfweLU4vHQ4PCxzOemxeTA1evZ5vJjZrBAAAADaUlEQVRoge2bi26rMAyGE2MSSCgJvP/DjmtXVi42dYrOEb+0SauqfcOO49uq1K1bt24tBIDKV728QoBvgn2ojcvyXpkzdfBfwgMUpf6rsvgCHdDmb+ReucXEdAzr5IEeMCUaHpvkXo+UT/7u6D9uT0aGI3QHT/TkuG/wyexJfA4FAa11keTJSWitE5BJFk9kdSCitRY3Olgy20rDISOzM2l2JKO1rmTRDJNrXcs+OOFK+5Xw5ebp7u4c7kXZFQMt7XDOUdM6SqKBxw6SDifmkVmi+QQaFrv5b577QrYKLHaQRF8ZY5feLX67JXhXLnunKsdgO1n0lXnsoBlaSrg1YgW4dInuGWzho3ZprQgtmd2Ks+mZTDSLjSKzxckKqQ7PEvRj1ApdvCVS9HQi3JUMQkNCmySDB1r9IFs3zEJKLnNphj1AeXDR0vwVft2Mi1K1pTjkow5jPEVszzqIszTx9YTv3awJbtOltuFZYnKnLbObpNTpINWr6HrxHmEwxKkogPB+wbnpToEmii9OAGN3sdTTYcKwNLyZtxXY2aSMkosTQGXHI9bi85WiLl2e566sCzXDcCzqMqtk8IBV82tj93Qo9MLh+/zKS+PkmupjPPjCLNrAfGsRBlAs32gK/wkdZlsvnbtCBwjvsdfZ/jQd4vpFYoJa4LsfivWoz+JJ+E4PlrdNBYg4fMWm3e7Oz/Vmh6VC7owx7mgocKqYqDijhp2/8ERKR063v6eSn914U609sStXYjVOEbui4PT6R2LOAlj7kSMxqzhy10kRs5aSNDnT6Mx5+ZFYkwjGdIUi3gRG0t3MClbW3SyHkzpOjhgJRTS6ezEiXCyPzOLkE860nCLGRJ21JaCIsUngbWYoIm9vmNswishlm/gxZxx08WPOOOggfcw5YzfZ27wX+UYXqo5fRa6U5UOMHmTSmaQXsVBOEN7kABcumEYRy6YEVwv5coH1IdZnIv6PE2vvShVxP3sp+0KbXxnf0p1BL3p3AI1sJnOcpghUbKWSWdZG7pgNfRDAZ23wZ7YJgCrYwxnWtnJnwydD3YF/ZvRiPuP+8rEqakM1QG7qokLBGfowqg62Nbt7ItPaoF6m2oIafqmPwT5K41yW9R8w6b47Z8qHDdFP70gp6JzQMcaP1fQfrBln+Gmht27d+rf0A9LrJqGOTbjfAAAAAElFTkSuQmCC");
	}

}