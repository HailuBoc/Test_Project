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
// Commit 9 - 2022-01-09 08:27:20
// Commit 46 - 2022-01-20 15:00:25
// Commit 83 - 2022-02-12 18:59:17
