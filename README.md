# MyFXBookClient

### Information
> **Version:** 2.0.13<br/>
> **Author:** Igor Popravka<br/>
> **Author URI:** <https://www.upwork.com/freelancers/~010854a54a1811f970><br/>
> **Description:** The WordPress plugin, which builds charts/graphs using the data from  API <https://www.myfxbook.com/api>

### Usages
After installation you can use short code **myfxbook** to integrate chats into your content.
```text
[myfxbook-client [attributes ...]]
```

### Allowable attributes:
* **accountID (_required_)** - _List of account IDs that are separated by a comma_
* **chartType (_required_)** - _Type of the chart that will build on a page_
* **backgroundColor (_optional_)** - _Color identifier for chart background_
* **gridLineColor (_optional_)** - _Color identifier for grid line of a chart_
* **title (_optional_)** - _Title of a chart_
* **fee (_optional_)** - _List of fee that are separated by a comma. Usage only with **[calculator-form]** type of the chart_
* **defaultCells (_optional_)** - _The list of the values of the table cells which will be replaced the default value if has the N/A value. Usage only with **[month-growth-table]** type of the chart_

######Format of the attribute "defaultCells":
```text
defaultCells="APR:2015=12.5,MAY:2016=4", where
------------------------------------------------
    - <APR:2015=12.5> and <MAY:2016=4> are refer to table cells which delimited by comma
    - <APR> and <MAY> are names of the month, should be in 3 chars
    - <2015> and <2016> are years
    - <12.5> and <4> are default values
```

### Allowable _'chartType'_ values:
* **month-growth** - Column chart which display growth data month by month for selected accounts
* **total-growth** - Line chart which display full growth data for selected accounts
* **monthly-gain-loss** - Column chart which display gain/loss data for selected accounts
* **calculator-form** - Form which calculate growth using the history growth of the selected accounts
* **month-growth-table** - Table which displays growth month by month for the selected accounts

### Example:
```text
[myfxbook-client accountID="123123,345345" chartType="month-growth" backgroundColor="#FFFFFF"]
```
