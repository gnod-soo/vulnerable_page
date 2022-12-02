var ChromeSamples = {
	log: function () {
		var line = Array.prototype.slice
			.call(arguments)
			.map(function (argument) {
				return typeof argument === 'string' ? argument : JSON.stringify(argument);
			})
			.join(' ');

		document.querySelector('#log').textContent += line + '\n';
	},

	clearLog: function () {
		document.querySelector('#log').textContent = '';
	},

	setStatus: function (status) {
		document.querySelector('#status').textContent = status;
	},

	setContent: function (newContent) {
		var content = document.querySelector('#content');
		while (content.hasChildNodes()) {
			content.removeChild(content.lastChild);
		}
		content.appendChild(newContent);
	},
};

scanButton.addEventListener('click', async () => {
log = ChromeSamples.log;
navigator.vibrate = navigator.vibrate || navigator.webkitVibrate || navigator.mozVibrate || navigator.msVibrate;
var success = document.querySelector('#success');
var fail = document.querySelector('#fail');
	try {
		const ndef = new NDEFReader();
		await ndef.scan();
		log('\n스캔을 시작합니다\n');

		ndef.addEventListener('readingerror', () => {
			var now = new Date();
			log('카드를 다시 대주세요 / ' + now.toLocaleString());
			fail.innerHTML++;
		});

		ndef.addEventListener('reading', ({ message, serialNumber }) => {
			var now = new Date();
			log(`인식되었습니다 / Serial: ${serialNumber} / ${now.toLocaleString()}`);
			success.innerHTML++;
		});
	} catch (error) {
		log('에러: ' + error + '\nNFC 기본 or 읽기/쓰기, 안드로이드 크롬에서만 동작합니다.');
	}
});