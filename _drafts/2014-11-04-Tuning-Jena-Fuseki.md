---
layout: post
title: Tuning Jena Fuseki
category: Utils
tagline: "Hacking"
tags: [utils, java, rdf]
summary:
status: draft
hn-discussion:
---

{% include JB/setup %}

<br />

Some intro here

<!--more-->


https://github.com/NatLibFi/Skosmos/wiki/FusekiTuning





http://wiki.eclipse.org/Jetty/Howto/High_Load#Thread_Pool

Thread Pool
It is very important to limit the task queue of Jetty. By default, the queue is unbounded! As a result, 
if under high load in excess of the processing power of the webapp, jetty will keep a lot of requests on 
the queue. Even after the load has stopped, Jetty will appear to have stopped responding to new requests 
as it still has lots of requests on the queue to handle.

For a high reliability system, it should reject the excess requests immediately (fail fast) by using a 
queue with a bounded capability. The capability (maximum queue length) should be calculated according to 
the "no-response" time tolerable. For example, if the webapp can handle 100 requests per second, and if you 
can allow it one minute to recover from excessive high load, you can set the queue capability to 60*100=6000. 
If it is set too low, it will reject requests too soon and can't handle normal load spike.

Below is a sample configuration:

{% highlight xml %}
<Configure id="Server" class="org.eclipse.jetty.server.Server">
    <Set name="ThreadPool">
      <New class="org.eclipse.jetty.util.thread.QueuedThreadPool">
        <!-- specify a bounded queue -->
        <Arg>
           <New class="java.util.concurrent.ArrayBlockingQueue">
              <Arg type="int">6000</Arg>
           </New>
      </Arg>
        <Set name="minThreads">10</Set>
        <Set name="maxThreads">200</Set>
        <Set name="detailedDump">false</Set>
      </New>
    </Set>
</Configure>
{% endhighlight %}

Configure the number of threads according to the webapp. That is, how many threads it needs in order to achieve 
the best performance. Configure with mind to limiting memory usage maximum available. Typically >50 and <500.
