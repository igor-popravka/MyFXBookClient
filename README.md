# FX-Service Client

### Information
> **Version:** 2.1.1<br/>
> **Author:** Igor Popravka<br/>
> **Author URI:** <https://www.upwork.com/freelancers/~010854a54a1811f970><br/>
> **Description:** The WordPress plugin, which builds Charts/Graphs/Tables using the data from API of the FX-Service Clients: [<a href="https://www.myfxbook.com/api">MYFXBook</a>] [<a href="https://www.fxblue.com">FXBlue Client</a>]

### Installation
Download and unpack zip archive from this repository. Use the ***wdip-fxservice-client.zip*** to upload and install plugin to your site.

### Usages
After installation you can use next short-codes **myfxbook-client** or **fxblue-client** to integrate chats into your content.
```text
[myfxbook-client [attributes ...]], or
[fxblue-client [attributes ...]]
```

### Allowable attributes for the _'myfxbook-client'_ short-code:
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

### Allowable _'chartType'_ values for the _'myfxbook-client'_ short-code:
* **month-growth** - Column chart which display growth data month by month for selected accounts
* **total-growth** - Line chart which display full growth data for selected accounts
* **monthly-gain-loss** - Column chart which display gain/loss data for selected accounts
* **calculator-form** - Form which calculate growth using the history growth of the selected accounts
* **month-growth-table** - Table which displays growth month by month for the selected accounts

### Allowable attributes for the _'fxblue-client'_ short-code:
* **chartType (_required_)** - _Type of the chart that will build on a page_
* **backgroundColor (_optional_)** - _Color identifier for chart background_
* **gridLineColor (_optional_)** - _Color identifier for grid line of a chart_
* **title (_optional_)** - _Title of a chart_

### Allowable _'chartType'_ values for the _'fxblue-client'_ short-code:
* **cumulative-pips** - The line chart
* **cumulative-return** - The line chart
* **monthly-return** - The column chart
* **account-stats** - The table data

### Example 1: use _'myfxbook-client'_ short-code:
```text
[myfxbook-client accountID="123123,345345" chartType="month-growth" backgroundColor="#FFFFFF"]
```

### Example 2: use _'fxblue-client'_ short-code:
```text
[fxblue-client chartType="cumulative-pips" backgroundColor="#FFFFFF"]
```