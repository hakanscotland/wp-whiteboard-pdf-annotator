document.addEventListener('DOMContentLoaded', function() {
    const excalidrawContainer = document.getElementById('excalidraw-container');
    if (excalidrawContainer) {
        const excalidrawLib = window.ExcalidrawLib; // Access ExcalidrawLib from global scope
        if (excalidrawLib) {
            excalidrawLib.Excalidraw.createContainer(excalidrawContainer, {
                // Excalidraw configuration options - you can customize these further

                // --- UI Customization ---
                defaultUI: "top", // or " Calcalidraw UI position (default is 'top')
                // Optionally hide certain UI elements:
                // UIOptions: {
                //     canvasActions: { position: "bottom" }, // Example to move canvas actions to bottom
                //     zoom: { position: "bottom-right" },     // Example to move zoom controls
                // },

                // --- Initial Data and Settings ---
                // initialData: { /* ... initial scene data in JSON format ... */ }, // You can load initial scene data here
                // theme: "dark", // or "light" (default is based on system preference)
                // gridMode: false, // Set to true to enable grid by default

                // --- Customization of Tools (usually defaults are comprehensive) ---
                // Optionally customize available tools (though defaults are usually fine)
                // availableTools: {
                //     // Example: If you wanted to *disable* the image tool (not recommended usually)
                //     image: false,
                //     // You can control other tools like 'eraser', 'hand', 'line', 'arrow', 'rectangle', 'ellipse', 'diamond', 'text', 'frame', 'embeddable', 'magicWand'
                // },

                // --- Events and Callbacks ---
                // onChange: (elements, state) => {
                //     console.log("Elements changed:", elements);
                //     console.log("Excalidraw state:", state);
                // },
                // onPointerUpdate: (payload) => {
                //     console.log("Pointer update:", payload);
                // },
                // onPaste: (data, event) => {
                //     console.log("Paste event:", data, event);
                //     return true; // Return false to prevent default paste behavior
                // },
                // onBeforeTextEdit: (textElement) => {
                //     console.log("Before text edit:", textElement);
                // },
                // onAfterTextEdit: (textElement) => {
                //     console.log("After text edit:", textElement);
                // },


                // --- More Advanced Options (refer to Excalidraw documentation for details) ---
                // libraries: [], // Custom libraries
                // autoFocus: true,
                // zenModeEnabled: false,
                // ... and many more options. Check Excalidraw documentation for full list.

            });
        } else {
            console.error('Excalidraw library not loaded.');
        }
    }
});