# WP-WhiteBoard PDF Annotator

**Description:**

WP-WhiteBoard PDF Annotator is a WordPress plugin that integrates Excalidraw, a virtual whiteboard tool, to allow users to annotate PDF documents directly within WordPress posts and pages.  It overlays Excalidraw's drawing canvas on top of an embedded PDF viewer, enabling users to draw, write, and highlight on the PDF content using Excalidraw's intuitive tools.

**Features:**

*   **PDF Annotation with Excalidraw:**  Embed a PDF document and use the full suite of Excalidraw whiteboard tools to annotate it. Tools include:
    *   Free-draw pen
    *   Shapes (rectangles, ellipses, diamonds)
    *   Lines and arrows
    *   Text tool
    *   Eraser
    *   Selection tool
    *   Hand tool (pan)
    *   Image insertion
    *   And more!
*   **Easy Embedding via Shortcode:**  Simply use the `[wp_whiteboard_pdf]` shortcode in any WordPress post or page to insert the PDF viewer and Excalidraw tools.
*   **Customizable Size:** Control the width and height of the PDF viewer and annotation area using shortcode attributes.
*   **Uses Browser's Native PDF Viewer:** Leverages the user's browser's built-in PDF rendering capabilities for PDF display.

**Installation:**

1.  **Download:** Download the plugin ZIP file from [link to be provided if you package it].
2.  **Upload:** In your WordPress admin dashboard, navigate to **Plugins** > **Add New** > **Upload Plugin**.
3.  **Choose File:** Click "Choose File" and select the downloaded plugin ZIP file.
4.  **Install Now:** Click "Install Now".
5.  **Activate Plugin:** After installation, click "Activate Plugin" on the plugin installation page.

**Usage:**

To embed a PDF viewer with Excalidraw annotation tools in your WordPress post or page, use the `[wp_whiteboard_pdf]` shortcode.

**Shortcode Attributes:**

*   **`pdf_url` (required):**  The URL of the PDF file you want to display and annotate. This can be a URL from your WordPress Media Library or an external URL.
*   **`width` (optional):**  Sets the width of the PDF viewer and Excalidraw area. Defaults to `800px`. You can use pixel values (e.g., `800px`) or percentages (e.g., `100%`).
*   **`height` (optional):** Sets the height of the PDF viewer and Excalidraw area. Defaults to `600px`.  Use pixel values (e.g., `600px`) or percentages (e.g., `700px`).

**Shortcode Example:**

```shortcode
[wp_whiteboard_pdf pdf_url="URL_OF_YOUR_PDF_FILE.pdf" width="100%" height="700px"]

**Example Usage in WordPress Post/Page:**

Go to edit or create a new WordPress Post or Page.

In the content editor, add a Shortcode block (or use the classic editor and insert the shortcode directly).

Enter the [wp_whiteboard_pdf] shortcode with the pdf_url attribute and optionally width and height attributes.

Preview or publish your post/page. You should see the PDF embedded with the Excalidraw toolbar above it, ready for annotation.

Limitations (Version 1.0.1):

No PDF Saving with Annotations: Annotations drawn using Excalidraw are not saved directly into the PDF file. The drawings are on an overlay canvas and will be lost if the page is refreshed or closed. This plugin is for interactive annotation during a session, not for persistent annotation directly on the PDF document itself.

Basic Visual Overlay: Excalidraw is visually overlaid on the PDF. The annotations are not part of the actual PDF document.

PDF Display Depends on Browser: The PDF rendering relies on the user's web browser's PDF viewer capabilities. Compatibility and display may vary across different browsers.

Future Enhancements (Possible Future Features):

Saving Annotations: Implement functionality to save Excalidraw annotations, potentially by storing them separately or exploring server-side PDF manipulation for direct PDF annotation (more complex).

Media Library Integration: Allow users to select PDFs directly from their WordPress Media Library instead of just providing a URL.

More Excalidraw Configuration Options: Expose more Excalidraw configuration settings within the shortcode or plugin settings.

Improved User Experience: Explore ways to enhance the user experience, such as better alignment and responsiveness of the overlay.

License:

This plugin is released under the GPL2 license.

Author:

Hakan Dag - https://secondmedia.co.uk

Thank you for using WP-WhiteBoard PDF Annotator!