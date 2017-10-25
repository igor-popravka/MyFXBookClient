# MyFXBookClient

### Information
> **Version:** 2.0.5<br/>
> **Author:** Web Developer Igor P.<br/>
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

### Allowable _'chartType'_ values:
* **month-growth** - Column chart which display growth data month by month for selected accounts
* **total-growth** - Line chart which display full growth data for selected accounts
* **monthly-gain-loss** - Column chart which display gain/loss data for selected accounts
* **calculator-form** - Form which calculate growth using the history growth of the selected accounts
* **month-growth-table** - Table which displays growth month by month for the selected accounts

### Example:
```text
[myfxbook accountID="123123,345345" chartType="month-growth" backgroundColor="#FFFFFF"]
```
