/**
 * @name Function id encode decode
 * @param String
 * @return String
**/
function encryptID(id) {
    var data   = window.btoa(id);
    var output = encodeURIComponent(data);
    return output;
}

function decryptID(id) {
    var data   = decodeURIComponent(id);
    var output = window.atob(data);
    return output;
}


/**
 * @name Function date formated
 * @param {type} date
 * @return String
**/
function formattedDateddmmyyyyDash(date) {
    // dateformat : dd-mm-yyyy
    var d = new Date(date || Date.now()),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [day, month, year].join('-');
}

function formattedDateddmmyyyySlash(date) {
    // dateformat : dd/mm/yyyy
    var d = new Date(date || Date.now()),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [day, month, year].join('/');
}

function formattedDateyyyymmddDash(date) {
    // dateformat : yyyy-mm-dd
    var d = new Date(date || Date.now()),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('-');
}

function formattedDateyyyymmddSlash(date) {
    // dateformat : yyyy/mm/dd
    var d = new Date(date || Date.now()),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('/');
}

function formattedDateyyyymmddNoDash(date) {
    // dateformat : yyyymmdd
    var d = new Date(date || Date.now()),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('');
}

function formattedDateddMMyyyyDash(date) {
    // dateformat : dd-MM-yyyy
    var bln = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Agt','Sep','Oct','Nov','Dec'];
    var d = new Date(date || Date.now()),
        month = bln[d.getMonth()],
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (day.length < 2) day = '0' + day;

    return [day, month, year].join('-');
}

function formattedDateddmmyyyy(date) {
    // dateformat : dd mm yyyy
    var bln = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Agt','Sep','Oct','Nov','Dec'];
    var d = new Date(date || Date.now()),
        month = bln[d.getMonth()],
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (day.length < 2) day = '0' + day;

    return [day, month, year].join(' ');
}

function formattedDateddMMyyyy(date) {
    // dateformat : dd MM yyyy
    var bln = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Novomber','Desember'];
    var d = new Date(date || Date.now()),
        month = bln[d.getMonth()],
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (day.length < 2) day = '0' + day;

    return [day, month, year].join(' ');
}

function formattedDateddMMyyyyHisDash(date) {
    // dateformat : dd-MM-yyyy H:i:s
    var bln = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Agt','Sep','Oct','Nov','Dec'];
    var d = new Date(date || Date.now()),
        month = bln[d.getMonth()],
        day = '' + d.getDate(),
        year = d.getFullYear(),
        hour = d.getHours(),
        min = d.getMinutes(),
        sec = d.getSeconds();

    if (day.length < 2) day = '0' + day;

    var date = [day, month, year].join('-');
    var time = [hour, min, sec].join(':');
    return [date, time].join(' ');
}


/**
 * @name Function number formated
 * @param {string}
 * @return String
 */
function formattedNumber(number, currency, precision) {
    var n   = JSON.parse(locale);
    var num = clearformattedNumber(number);

    /* Set Precision */
    if (num.indexOf(n.decimal) <= 0)
    {
        number = $.number(num, 0, n.decimal, n.separator);
    }
    else
    {
        var n2 = num.split(n.decimal);
        if (n2.length > 1)
        {
            if (n2[1] == '')
            {
                number = number;
            // }
            // else if (n2[1] < 10) {
                // number = $.number(num, 1, n.decimal, n.separator);
            }
            else
            {
                if (n2[1] == 0)
                {
                    number = $.number(num, 0, n.decimal, n.separator);
                }
                else
                {
                    if (precision != undefined)
                    {
                        if (precision == true)
                        {
                            number = $.number(num, 2, n.decimal, n.separator);
                        }
                        else
                        {
                            number = $.number(num, 0, n.decimal, n.separator);
                        }
                    }
                    else
                    {
                        number = $.number(num, 0, n.decimal, n.separator);
                    }
                }
            }
        }
    }

    /* Set Currency */
    if (currency != undefined)
    {
        if (currency == true)
        {
            currency = 'Rp. ';
            number = currency + number;
        }
        else
        {
            number = number;
        }
    }

    return number;
}


/**
 * @name Function clear number formated
 * @param {string}
 * @return String
 */
function clearformattedNumber(number) {
    var n    = JSON.parse(locale);
    number   = number.toString();
    number   = number.split(' ');
    number   = number[number.length-1];

    if (n.separator == '.') {
        number = number.replace(/[.]/g,'');
    } else {
        number = number.replace(/[,]/g,'');
    }

    return number;
}
