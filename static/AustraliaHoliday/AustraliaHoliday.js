/**
 * 指定天是否在数组中
 */
function dateIsInObject(date, days) {
	var d = (date.getMonth() + 1) + '-' + date.getDate();
	for (var i = 0; i < days.length; i++) {
		if (days[i].day == d) return days[i];
	}
	return false;
}

/**
 * 给指定日期添加天数
 */
function dateAdd(date, day) {
	return new Date(Math.abs(date) + (day * 24 * 60 * 60 * 1000));
}

/**
 * 取指定年月的指定周几
 */
function getMonthFirstWeek(year, month, week, day) {
	var monthFirstDay = new Date(year, month - 1, 1);
	var monthFirstDayWeek = monthFirstDay.getDay();

	if (monthFirstDayWeek == day) {
		if (week > 1) return dateAdd(monthFirstDay, (week - 1) * 7);
		else return monthFirstDay;
	}

	var firstSunny = dateAdd(monthFirstDay, -monthFirstDayWeek);

	if (day < monthFirstDayWeek) week++;
	return dateAdd(firstSunny, (week - 1) * 7 + day);
}

/**
 * 获取指定年月的最后周几
 */
function getMonthLastWeek(year, month, week, day) {
	var nextMonthFirstDay = new Date(year, month, 1);
	var monthLastDay = dateAdd(nextMonthFirstDay, -1);
	var monthLastDayWeek = monthLastDay.getDay();

	if (monthLastDayWeek == day) {
		if (week > 1) return dateAdd(monthLastDay, -(week - 1) * 7);
		else return monthLastDay;
	}

	var nextMonthFirstSunny = dateAdd(monthLastDay, 7 - monthLastDayWeek);

	if (day < monthLastDayWeek) week--;
	return dateAdd(nextMonthFirstSunny, -(week + 1) * 7 + day);
}

/**
 * 获取指定年的复活节
 */
function getEasterDay(year) {
	if ( year < 1900 || year > 2099 ) return false;

	var n = year - 1900;
	var a = n % 19;
	var q = parseInt( n / 4 );
	var b = parseInt( ( a * 7 + 1 ) / 19 );
	var m = ( a * 11 + 4 - b ) % 29;
	var w = ( n + q + 31 - m ) % 7;
	var d = 25 - m - w;

	if ( d == 0 ) return new Date(year, 2, 31);
	else if ( d  > 0 ) return new Date(year, 3, d);
	else return new Date(year, 2, 31 + d);
}


/**
 * 根据年份得到固定假日
 */
function getFixedHoliday(year) {
	return [
		{ 'txt': 'New Year\'s Day', 'day': '1-1', 'add': 1 },
		{ 'txt': 'Australia Day', 'day': '1-26', 'add': 1 },
		{ 'txt': 'Good Friday', 'day': '4-14', 'add': 1 },
		{ 'txt': 'ANZAC Day', 'day': '4-25', 'add': 1 },
		{ 'txt': 'Christmas Day', 'day': '12-25', 'add': 1 },
		{ 'txt': 'Boxing Day', 'day': '12-26', 'add': 1 }
	];
}

/**
 * 判断日期是否为周末，如果是周末需要补假期
 */
function getFinalHoliday(dates, year) {
	var tmpDatas = [];
	var tmpDates = [];
	for (var i = 0; i < dates.length; i++) tmpDates.push(dates[i].day);

	for (var i = 0; i < dates.length; i++) {
		tmpDatas.push(dates[i]);
		if (dates[i].add == 0) continue;

		var date = new Date(year, parseInt(dates[i].day.split('-')[0]) - 1, dates[i].day.split('-')[1]);
		var w = date.getDay();
		var newDate, newWeek;
		if (w == 0 || w == 6) {
			if (w == 0) newDate = dateAdd(date, 1);
			else newDate = dateAdd(date, 2);
			newWeek = newDate.getDay();
			while (newWeek == 0 || newWeek == 6 || isInArray((newDate.getMonth() + 1) + '-' + newDate.getDate(), tmpDates)) {
				newDate = dateAdd(date, 1);
				newWeek = newDate.getDay();
			}
			tmpDates.push((newDate.getMonth() + 1) + '-' + newDate.getDate());
			tmpDatas.push({ 'txt': 'Additional Holiday', 'day': (newDate.getMonth() + 1) + '-' + newDate.getDate(), 'add': 0 });
		}
	}
	return tmpDatas;
}

/**
 * 获取一年的假期
 */
function getYearHoliday(state, year) {
	if (state == '') return [];
	if (year == 0 || year == '') year = new Date().getFullYear();

	var cityHolidays = getFixedHoliday(year);

	var d;
	switch (state) {
		case 'VIC':
			d = getMonthFirstWeek(year, 3, 2, 1);
			cityHolidays.push({ 'txt': 'Labour Day', 'day': (d.getMonth() + 1) + '-' + d.getDate(), 'add': 1 });
			d = getMonthFirstWeek(year, 6, 2, 1);
			cityHolidays.push({ 'txt': 'Queen\'s Birthday', 'day': (d.getMonth() + 1) + '-' + d.getDate(), 'add': 1 });
			d = getMonthLastWeek(year, 9, 1, 5);
			cityHolidays.push({ 'txt': 'Friday before the AFL Grand Final', 'day': (d.getMonth() + 1) + '-' + d.getDate(), 'add': 1 });
			d = getMonthFirstWeek(year, 11, 1, 2);
			cityHolidays.push({ 'txt': 'Melbourne Cup', 'day': (d.getMonth() + 1) + '-' + d.getDate(), 'add': 1 });

			var easterDay = getEasterDay(year);
			d = dateAdd(easterDay, -1);
			cityHolidays.push({ 'txt': 'Saturday before Easter Sunday', 'day': (d.getMonth() + 1) + '-' + d.getDate(), 'add': 0 });
			d = easterDay;
			cityHolidays.push({ 'txt': 'Easter Day', 'day': (d.getMonth() + 1) + '-' + d.getDate(), 'add': 0 });
			d = dateAdd(easterDay, 1);
			cityHolidays.push({ 'txt': 'Easter Monday', 'day': (d.getMonth() + 1) + '-' + d.getDate(), 'add': 0 });
			break;
		case 'NSW':
			d = getMonthFirstWeek(year, 6, 2, 1);
			cityHolidays.push({ 'txt': 'Queen\'s Birthday', 'day': (d.getMonth() + 1) + '-' + d.getDate(), 'add': 1 });
			d = getMonthFirstWeek(year, 8, 1, 1);
			cityHolidays.push({ 'txt': 'Bank Holiday', 'day': (d.getMonth() + 1) + '-' + d.getDate(), 'add': 1 });
			d = getMonthFirstWeek(year, 10, 1, 1);
			cityHolidays.push({ 'txt': 'Labour day', 'day': (d.getMonth() + 1) + '-' + d.getDate(), 'add': 1 });

			var easterDay = getEasterDay(year);
			d = dateAdd(easterDay, -1);
			cityHolidays.push({ 'txt': 'Saturday before Easter Sunday', 'day': (d.getMonth() + 1) + '-' + d.getDate(), 'add': 0 });
			d = easterDay;
			cityHolidays.push({ 'txt': 'Easter Day', 'day': (d.getMonth() + 1) + '-' + d.getDate(), 'add': 0 });
			d = dateAdd(easterDay, 1);
			cityHolidays.push({ 'txt': 'Easter Monday', 'day': (d.getMonth() + 1) + '-' + d.getDate(), 'add': 0 });
			break;
		case 'WA':
			d = getMonthFirstWeek(year, 3, 1, 1);
			cityHolidays.push({ 'txt': 'Labour Day', 'day': (d.getMonth() + 1) + '-' + d.getDate(), 'add': 1 });
			d = getMonthFirstWeek(year, 6, 1, 1);
			cityHolidays.push({ 'txt': 'Western Australia Day', 'day': (d.getMonth() + 1) + '-' + d.getDate(), 'add': 1 });
			d = getMonthLastWeek(year, 9, 1, 1);
			cityHolidays.push({ 'txt': 'Queen\'s Birthday', 'day': (d.getMonth() + 1) + '-' + d.getDate(), 'add': 1 });

			var easterDay = getEasterDay(year);
			//d = dateAdd(easterDay, -1);
			//cityHolidays.push({ 'txt': 'Saturday before Easter Sunday', 'day': (d.getMonth() + 1) + '-' + d.getDate(), 'add': 0 });
			//d = easterDay;
			//cityHolidays.push({ 'txt': 'Easter Day', 'day': (d.getMonth() + 1) + '-' + d.getDate(), 'add': 0 });
			d = dateAdd(easterDay, 1);
			cityHolidays.push({ 'txt': 'Easter Monday', 'day': (d.getMonth() + 1) + '-' + d.getDate(), 'add': 0 });
			break;
	}

	cityHolidays = getFinalHoliday(cityHolidays);
	//console.log(cityHolidays);

	return cityHolidays;
}