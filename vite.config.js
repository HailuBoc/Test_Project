import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

export default defineConfig({
  plugins: [vue()],
  server: {
    host: 'localhost',
    port: 5173,
    hmr: {
      host: 'localhost',
      port: 5173,
    },
  },
  build: {
    outDir: 'public/build',
    manifest: true,
  },
})
// Commit 9 - 2022-01-13 10:03:12
// Commit 46 - 2022-04-30 09:52:41
