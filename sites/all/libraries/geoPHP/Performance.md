geoPHP optionally wraps the [[GEOS PHP extension|GEOS]]. Below are some simple performance tests that I ran using both a large set of roads (2MB of JSON), and a really simple polygon. For the polygon, I looped the test 3000 times to get an average. 

The results are number of seconds to complete the operation (lower is better). As you can see installing the geos-php extension at least doubles performance and can, in some cases, lead to a 10x improvement in performance.

### Big Roads centroid
    Without Geos: 1.2631900310516 secs
    With Geos:    0.6027820110321 secs

### Big Roads getBBox
    Without Geos: 1.2799670696259 secs
    With Geos:    0.6133630275726 secs

### Simple Polygon centroid x3000
    Without Geos: 0.21501302719116 secs
    With Geos:    0.03558087348938 secs

### Simple Polygon area x3000
    Without Geos: 0.073577880859375 secs
    With Geos:    0.009435892105102 secs

### Simple Polygon getBBox x3000
    Without Geos: 0.09908390045166 secs
    With Geos:    0.05712819099426 secs

### Complex Geometry Collection reading WKT into a Geometry x5
    Without Geos: 11.156386852264 secs
    With Geos:    7.8141958713531 secs

### Complex Geometry Collection writing WKT x5
    Without Geos: 13.316060066223 secs
    With Geos:    2.0791599750519 secs
