# TODO: Change Video Upload from YouTube to Google Drive

## Plan Implementation Steps:

### 1. Update Course Create Form
- [x] Change label from "Video Code (YouTube)" to "Video Link (Google Drive)"
- [x] Change placeholder from "YouTube video code" to "Google Drive file ID or shareable link"
- [x] Update help text accordingly

### 2. Update Course Edit Form
- [x] Apply same changes as create form

### 3. Update Course Show View
- [x] Change iframe src from YouTube embed to Google Drive embed
- [x] Add logic to extract file ID from shareable link if provided
- [x] Embed URL: https://drive.google.com/file/d/{file_id}/preview

### 4. Testing
- [ ] Test with Google Drive file ID
- [ ] Test with shareable link
- [ ] Verify embedding works correctly
