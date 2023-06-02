const time = document.getElementById('time');
const startBtn = document.getElementById('startbtn');
const stopBtn = document.getElementById('stopbtn');
const resetBtn = document.getElementById('reset');

//開始時間
let startTime;
//停止時間
let stopTime = 0;
//タイムアウトID
let timeoutID;

//時間を表示する関数
function displayTime() {
    const currentTime = new Date(Date.now() - startTime + stopTime);
    const h = String(currentTime.getHours()-1).padStart(2, '0');
    const m = String(currentTime.getMinutes()).padStart(2, '0');
    const s = String(currentTime.getSeconds()).padStart(2, '0');
    const ms = String(currentTime.getMilliseconds()).padStart(2, '0');
    
    time.textContent = `${h}:${m}:${s}:${ms}`;
    timeoutID = setTimeout(displayTime, 10);
}

//スタートボタンがクリックされたら時間を進める
startBtn.addEventListener('click', () => {
    startBtn.disabled = true;
    stopBtn.disabled  = false;
    resetBtn          = true;
    startTime = Date.now();
    displayTime();
});

//ストップボタンがクリックされたら時間を止める
stopBtn.addEventListener('click', function() {
    startBtn.disabled = false;
    stopBtn.disabled  = true;
    resetBtn.disabled = false;
    clearTimeout(timeoutID);
    stopTime += (Date.now() - startTime);
});

//リセットぼたんがクリックされたら時間を0に戻す
resetBtn.addEventListener('click', function(){
    startBtn.disabled = false;
    stopBtn.disabled  = true;
    resetBtn.disabled = true;
    time.textContent = '00:00:00.00';
    stopTime = 0;
});