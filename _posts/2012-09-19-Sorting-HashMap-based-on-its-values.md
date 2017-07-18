---
title: Sorting HashMap based on its values
date: 2012-09-19 00:00:00 Z
categories:
- utils
tags:
- utils
- java
layout: post
tagline: Hacking
summary: 
status: final
hn-discussion: 
---

_This post was first published on my Wordpress page [link](http://depinfi.wordpress.com/2012/09/19/sorting-hashmap-based-on-its-values/)_

This task could be done in different ways. [Here](http://www.theserverside.com/discussions/thread.tss?thread_id=29569) 
a discussion about some ways. In this post I will show one that I followed. Roughly speaking, the idea is convert the map 
into a list with the purpose of use the classic `Collection.sort()` method.
The first think is that you need is to define a new class, that represents one map entry; 
and implements the `Comparable` interface. In this class you have to implement the `compareTo` 
method and override the `toString` (if you want).

{% highlight java lineno %}
import java.util.Map;
 
@SuppressWarnings("rawtypes")
public class CustomEntry implements Comparable
{
    private Map.Entry   entry;
 
    public CustomEntry(Map.Entry entry)
    {
        this.entry = entry;
    }
 
    public Map.Entry getEntry()
    {
        return this.entry;
    }
 
    public int compareTo(CustomEntry anotherEntry)
    {
        Integer thisIntegerVal = (Integer) (this.getEntry().getValue());
        int thisVal = thisIntegerVal.intValue();
        Integer anotherIntegerVal = (Integer) (anotherEntry.getEntry().getValue());
        int anotherVal = anotherIntegerVal.intValue();
        return (thisVal < anotherVal ? 1 : (thisVal == anotherVal ? 0 : -1));
    }
 
    public int compareTo(Object o)
    {
        return compareTo((CustomEntry) o);
    }
 
    @Override
    public String toString()
    {
        StringBuilder str = new StringBuilder();
        str.append(this.getEntry().getKey()).append(":").append(this.getEntry().getValue());
        return str.toString();
    }
}
{% endhighlight %}

Next step is to define the function that will convert any map into a list. Basically, 
this function will recover the entries in the map, and transform them into custom entries 
using the previous class `CustomEntry`.

{% highlight java lineno %}
import java.util.*;
import java.util.Map.Entry;
 
public class MapFunctions
{
    public MapFunctions()
    {
    }
 
    public static <T, E> List<CustomEntry> convertMapToList(Map<T, E> map)
    {
        List<CustomEntry> list = new ArrayList<CustomEntry>();
        Set<Entry<T, E>> entrySet = map.entrySet();
        Iterator<Entry<T, E>> iterator = entrySet.iterator();
        while (iterator.hasNext())
        {
            Map.Entry<T, E> entry = (Map.Entry<T, E>) iterator.next();
            CustomEntry customEntry = new CustomEntry(entry);
            list.add(customEntry);
        }
        return list;
    }
}
{% endhighlight %}

Now, you are allowed to execute the following instructions:

{% highlight java lineno %}
THashMap<String, Integer> map = ... /* some initialization */
List<CustomEntry> sortedList = MapFunctions.convertMapToList(map);
Collections.sort(sortedList);
System.out.println(sortedList);
{% endhighlight %}

and you will print the list of entries (from your original map) sorted based on its (original) values.

Cheers!
