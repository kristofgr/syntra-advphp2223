het moet OOP zijn...
- class DB
- class track


/230217/api/v1/track/id
  - data 
    - alles


/230217/api/v1/tracks
-> json -> returnt 50 resultaten
  - total_pages
  - next_page_url
  - data (max 50x)
    - id
    - track_id
    - artist_name
    - genre
-> filteren via querystring
  - track_id
  - genre
  - artist_name

