# Plug-Query-Builder
An Intelligent Query Builder for the SQL Language. It generates a complete sql string by calling methods on a parent QueryBuilder() object

**This SQL Query Builder works through method chaining. You can call subsequent methods on another recursively.**

For example:

	$query = new QueryBuilder()
			->select("first_name", "last_name")
			->from("EmployeeInfo")
			->where("employee_id < 563")
			->build();

__You finally build the sql query by calling the `build()` method on your `QueryBuilder()` object__

The `build()` method is the only method that returns a string data, every other method returns a new instance
of a `QueryBuilder()` object

# Supported SQL Methods
+ select(string ...$string) //zero or more string parameters
+ from(string $string)
+ where(string $string)
+ values(string ...$string)
+ into(string $string, QueryBuilder $query_builder_object = null) //optional second parameter
+ insert()
+ update(string $string)
+ set(string $string)
+ delete(string $string)

<i>You should know that:</i>
	> This class is not an SQL string validator. It does not validate your sql queries.
	It only appends a string to another based on the method you've called.
	So if you append a `where()` method directly to a `select()` method, it still
	generates an sql string.