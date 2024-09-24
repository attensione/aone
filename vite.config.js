import { resolve } from 'path'
import { defineConfig } from 'vite'

export default defineConfig({
    build: {
        outDir: './docs',
        emptyOutDir: true,
        rollupOptions: {
            input: {
                main: resolve(__dirname, 'index.html'),
                nested: resolve(__dirname, 'error.html'),
            },
        },
    },
})