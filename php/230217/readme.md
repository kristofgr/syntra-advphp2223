het moet OOP zijn...
- class DB
- class track


http://localhost:80/230217/api/v1/track/[id]
  - data 
    - alles



http://localhost:80/230217/api/v1/tracks

-> json -> returnt 50 resultaten
  - page 
  - total_pages
  - next_page_url
  - data (max 50x)
    - id
    - track_id
    - track_name
    - artist_name
    - genre
    
-> filteren via querystring
  <!-- - page -->
  - genre
  - artist_name

