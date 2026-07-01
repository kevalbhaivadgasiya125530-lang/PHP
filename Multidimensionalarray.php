&lt;?php
// Numeric Array
$days = array(&quot;Monday&quot;, &quot;Tuesday&quot;, &quot;Wednesday&quot;, &quot;Thursday&quot;, &quot;Friday&quot;, &quot;Saturday&quot;);
echo &quot;&lt;h3&gt;Numeric Array (Days)&lt;/h3&gt;&quot;;
foreach($days as $day){
echo $day . &quot;&lt;br&gt;&quot;;
}
$months = array(
&quot;January&quot; =&gt; 31,
&quot;February&quot; =&gt; 28,
&quot;March&quot; =&gt; 31,
&quot;April&quot; =&gt; 30,
&quot;May&quot; =&gt; 31,
&quot;June&quot; =&gt; 30,
&quot;July&quot; =&gt; 31,
&quot;August&quot; =&gt; 31,
&quot;September&quot; =&gt; 30,
&quot;October&quot; =&gt; 31,
&quot;November&quot; =&gt; 30,
&quot;December&quot; =&gt; 31
);
// Associative Array

echo &quot;&lt;h3&gt;Associative Array (Months and Days)&lt;/h3&gt;&quot;;
foreach($months as $month =&gt; $days){
echo $month . &quot; =&gt; &quot; . $days . &quot;&lt;br&gt;&quot;;
}
$laptops = array(
&quot;Dell&quot; =&gt; array(
&quot;Model&quot; =&gt; &quot;Inspiron 15&quot;,
&quot;Price&quot; =&gt; 55000
),
&quot;HP&quot; =&gt; array(
&quot;Model&quot; =&gt; &quot;Pavilion 14&quot;,
&quot;Price&quot; =&gt; 60000
)
);
// MultiDimensional Array
echo &quot;&lt;h3&gt;Multidimensional Array (Laptop Details)&lt;/h3&gt;&quot;;
foreach($laptops as $company =&gt; $details){
echo &quot;Company: &quot; . $company . &quot;&lt;br&gt;&quot;;
echo &quot;Model: &quot; . $details[&quot;Model&quot;] . &quot;&lt;br&gt;&quot;;
echo &quot;Price: Rs.&quot; . $details[&quot;Price&quot;] . &quot;&lt;br&gt;&lt;br&gt;&quot;;
}

?&gt;`