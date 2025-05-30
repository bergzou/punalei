// const base = 'https://ainuo.com.cn';
function getDomainName() {
    var url = window.location.href;
    var parser = new URL(url);
    return parser.hostname;
}
const base = getDomainName()?"https://" + getDomainName():'www.ainuopower.com';
console.log(base);