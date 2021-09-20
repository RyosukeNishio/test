var element = //elementをimg要素（querySelectorAll()などで取得すればよいのではないでしょうか）として
var length = element.length;

// setTimeoutなどを使って、window.onload後から遅らせるなどして以下を処理
for(var i = 0; i < length ; i++){
  var originSrc = element[i].getAttribute('data-src');
  element[i].setAttribute('src',originSrc);
}