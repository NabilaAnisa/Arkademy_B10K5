function betweenDays (start, end) {
    start = new Date(start);
    end = new Date(end);
    let arr = new Array();
    let dt = new Date(start);
    while (dt <= end) {
        arr.push(new Date(dt).toISOString().split('T')[0]);
        dt.setDate(dt.getDate() + 1);
    }
    
    return arr;
}

let dateArr = betweenDays('2019-11-01', '2019-11-05')

console.log(dateArr);