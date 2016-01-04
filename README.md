# Plug-Query-Builder
An Intelligent Query Builder for the SQL Language. It generates a complete sql string by calling methods on a parent `QueryBuilder()` object

# Supported SQL Methods
	+ `select(string ...$string) //zero or more string parameters`
	+ `from(string $string)`
	+ `where(string $string)`
	+ `values(string ...$string)
	+ `into(string $string, QueryBuilder $query_builder_object = null) //optional second parameter`