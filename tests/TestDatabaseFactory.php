<?php

class TestDatabaseFactory {
	public static function create(string $project = null): PDO {
		$host = Config::get('test-db-host');
		$name = $project ? 'linkcounttest' : '';
		$port = Config::get('test-db-port');
		$user = Config::get('test-db-user');
		$pass = Config::get('test-db-password');

		return new PDO("mysql:host=$host;dbname=$name;port=$port;charset=utf8", $user, $pass);
	}
}

define('OVERRIDE_DATABASE_FACTORY', TestDatabaseFactory::class);
| revenue = {{increase}} {{US$|98.6&nbsp;billion|link=yes}} (2023)
| operating_income = {{decrease}} US$28.3&nbsp;billion (2023)
| net_income = {{decrease}} US$26.5&nbsp;billion (2023)
| aum = {{increase}} US$1.62&nbsp;trillion (2023)
| assets = {{increase}} US$3.18&nbsp;trillion (2023)
| equity = {{nowrap |{{increase}} US$292&nbsp;billion (2023)}}
| owners = [[Berkshire Hathaway]] (12.8%)
| num_employees = {{circa|213,000}} (2023)
| divisions = {{Unbulleted list|[[BofA Securities]]|[[Merrill (company)|Merrill]]|[[Bank of America Private Bank]]}}
| subsid = 
| ratio = 
| website = {{URL|bankofamerica.com}}
| footnotes =<ref name="10K-2023">{{cite web |title=Bank of America Corp 2023 Annual Report (Form 10-K) |url=https://www.sec.gov/ix?